const PUZZLE_HOVER_TINT = '#009900';

var puzzle_difficulty = 2;

var _stage;
var _canvas;

var _puzzleName;
var _img;
var _pieces;
var _puzzleWidth;
var _puzzleHeight;
var _pieceWidth;
var _pieceHeight;
var _currentPiece;
var _currentDropPiece;  

var _mouse;

var _startTime;
var _endTime;

var _level;

function init(){
	_puzzleName = location.search.split('name=')[1];
	_img = new Image();
	_img.addEventListener('load',onImage,false);
	_img.src = "images/" + _puzzleName + ".jpg";
	if (_puzzleName.indexOf('melilla') > -1)
		puzzle_difficulty = 3;
	else if (_puzzleName.indexOf('malaga') > -1)
		puzzle_difficulty = 3;
	else if (_puzzleName.indexOf('segovia') > -1)
		puzzle_difficulty = 4;
	else if (_puzzleName.indexOf('granada') > -1)
		puzzle_difficulty = 4;
	else if (_puzzleName.indexOf('sevilla') > -1)
		puzzle_difficulty = 5;
}
function onImage(e){
	_pieceWidth = Math.floor(_img.width / puzzle_difficulty)
	_pieceHeight = Math.floor(_img.height / puzzle_difficulty)
	_puzzleWidth = _pieceWidth * puzzle_difficulty;
	_puzzleHeight = _pieceHeight * puzzle_difficulty;
	setCanvas();
	initPuzzle();
}
function setCanvas(){
	_canvas = document.getElementById('canvas');
	_stage = _canvas.getContext('2d');
	_canvas.width = _puzzleWidth;
	_canvas.height = _puzzleHeight;
	_canvas.style.border = "1px solid black";
}
function initPuzzle(){
	_pieces = [];
	_mouse = {x:0,y:0};
	_currentPiece = null;
	_currentDropPiece = null;
	_stage.drawImage(_img, 0, 0, _puzzleWidth, _puzzleHeight, 0, 0, _puzzleWidth, _puzzleHeight);
	createTitle("Click para empezar el puzzle");
	buildPieces();
}
function createTitle(msg){
	_stage.fillStyle = "#000000";
	_stage.globalAlpha = .4;
	_stage.fillRect(100,_puzzleHeight - 40,_puzzleWidth - 200,40);
	_stage.fillStyle = "#FFFFFF";
	_stage.globalAlpha = 1;
	_stage.textAlign = "center";
	_stage.textBaseline = "middle";
	_stage.font = "20px Arial";
	_stage.fillText(msg,_puzzleWidth / 2,_puzzleHeight - 20);
}
function buildPieces(){
	var i;
	var piece;
	var xPos = 0;
	var yPos = 0;
	for(i = 0;i < puzzle_difficulty * puzzle_difficulty;i++){
		piece = {};
		piece.sx = xPos;
		piece.sy = yPos;
		_pieces.push(piece);
		xPos += _pieceWidth;
		if(xPos >= _puzzleWidth){
			xPos = 0;
			yPos += _pieceHeight;
		}
	}
	document.onmousedown = shufflePuzzle;
	document.addEventListener('touchstart', function(e) {
			e.preventDefault();
			shufflePuzzle();
		});

}
function shufflePuzzle(){
	clearPointsAndStars();
	_pieces = shuffleArray(_pieces);
	_stage.clearRect(0,0,_puzzleWidth,_puzzleHeight);
	var i;
	var piece;
	var xPos = 0;
	var yPos = 0;
	for(i = 0;i < _pieces.length;i++){
		piece = _pieces[i];
		piece.xPos = xPos;
		piece.yPos = yPos;
		_stage.drawImage(_img, piece.sx, piece.sy, _pieceWidth, _pieceHeight, xPos, yPos, _pieceWidth, _pieceHeight);
		_stage.strokeRect(xPos, yPos, _pieceWidth,_pieceHeight);
		xPos += _pieceWidth;
		if(xPos >= _puzzleWidth){
			xPos = 0;
			yPos += _pieceHeight;
		}
	}
	document.onmousedown = onPuzzleClick;
	document.addEventListener('touchstart', function(e) {
			e.preventDefault();
			onPuzzleClick();
		});
	_startTime = new Date().getTime();
}
function onPuzzleClick(e){
	if(e.layerX || e.layerX == 0){
		_mouse.x = e.layerX - _canvas.offsetLeft;
		_mouse.y = e.layerY - _canvas.offsetTop;
	}
	else if(e.offsetX || e.offsetX == 0){
		_mouse.x = e.offsetX - _canvas.offsetLeft;
		_mouse.y = e.offsetY - _canvas.offsetTop;
	}
	_currentPiece = checkPieceClicked();
	if(_currentPiece != null){
		_stage.clearRect(_currentPiece.xPos,_currentPiece.yPos,_pieceWidth,_pieceHeight);
		_stage.save();
		_stage.globalAlpha = .9;
		_stage.drawImage(_img, _currentPiece.sx, _currentPiece.sy, _pieceWidth, _pieceHeight, _mouse.x - (_pieceWidth / 2), _mouse.y - (_pieceHeight / 2), _pieceWidth, _pieceHeight);
		_stage.restore();
		document.onmousemove = updatePuzzle;
		document.onmouseup = pieceDropped;

		document.addEventListener('touchmove', function(e) {
			e.preventDefault();
			updatePuzzle();
		});

		document.addEventListener('touchend', function(e) {
			e.preventDefault();
			pieceDropped();
		});
	}
}
function checkPieceClicked(){
	var i;
	var piece;
	for(i = 0;i < _pieces.length;i++){
		piece = _pieces[i];
		if(_mouse.x < piece.xPos || _mouse.x > (piece.xPos + _pieceWidth) || _mouse.y < piece.yPos || _mouse.y > (piece.yPos + _pieceHeight)){
			//PIECE NOT HIT
		}
		else{
			return piece;
		}
	}
	return null;
}
function updatePuzzle(e){
	_currentDropPiece = null;
	if(e.layerX || e.layerX == 0){
		_mouse.x = e.layerX - _canvas.offsetLeft;
		_mouse.y = e.layerY - _canvas.offsetTop;
	}
	else if(e.offsetX || e.offsetX == 0){
		_mouse.x = e.offsetX - _canvas.offsetLeft;
		_mouse.y = e.offsetY - _canvas.offsetTop;
	}
	_stage.clearRect(0,0,_puzzleWidth,_puzzleHeight);
	var i;
	var piece;
	for(i = 0;i < _pieces.length;i++){
		piece = _pieces[i];
		if(piece == _currentPiece){
			continue;
		}
		_stage.drawImage(_img, piece.sx, piece.sy, _pieceWidth, _pieceHeight, piece.xPos, piece.yPos, _pieceWidth, _pieceHeight);
		_stage.strokeRect(piece.xPos, piece.yPos, _pieceWidth,_pieceHeight);
		if(_currentDropPiece == null){
			if(_mouse.x < piece.xPos || _mouse.x > (piece.xPos + _pieceWidth) || _mouse.y < piece.yPos || _mouse.y > (piece.yPos + _pieceHeight)){
				//NOT OVER
			}
			else{
				_currentDropPiece = piece;
				_stage.save();
				_stage.globalAlpha = .4;
				_stage.fillStyle = PUZZLE_HOVER_TINT;
				_stage.fillRect(_currentDropPiece.xPos,_currentDropPiece.yPos,_pieceWidth, _pieceHeight);
				_stage.restore();
			}
		}
	}
	_stage.save();
	_stage.globalAlpha = .6;
	_stage.drawImage(_img, _currentPiece.sx, _currentPiece.sy, _pieceWidth, _pieceHeight, _mouse.x - (_pieceWidth / 2), _mouse.y - (_pieceHeight / 2), _pieceWidth, _pieceHeight);
	_stage.restore();
	_stage.strokeRect( _mouse.x - (_pieceWidth / 2), _mouse.y - (_pieceHeight / 2), _pieceWidth,_pieceHeight);
}
function pieceDropped(e){
	document.onmousemove = null;
	document.onmouseup = null;

	document.addEventListener('touchmove', function(e) {
			e.preventDefault();
		});

	document.addEventListener('touchend', function(e) {
			e.preventDefault();
		});

	if(_currentDropPiece != null){
		var tmp = {xPos:_currentPiece.xPos,yPos:_currentPiece.yPos};
		_currentPiece.xPos = _currentDropPiece.xPos;
		_currentPiece.yPos = _currentDropPiece.yPos;
		_currentDropPiece.xPos = tmp.xPos;
		_currentDropPiece.yPos = tmp.yPos;
	}
	resetPuzzleAndCheckWin();
}
function resetPuzzleAndCheckWin(){
	_stage.clearRect(0,0,_puzzleWidth,_puzzleHeight);
	var gameWin = true;
	var i;
	var piece;
	for(i = 0;i < _pieces.length;i++){
		piece = _pieces[i];
		_stage.drawImage(_img, piece.sx, piece.sy, _pieceWidth, _pieceHeight, piece.xPos, piece.yPos, _pieceWidth, _pieceHeight);
		_stage.strokeRect(piece.xPos, piece.yPos, _pieceWidth,_pieceHeight);
		if(piece.xPos != piece.sx || piece.yPos != piece.sy){
			gameWin = false;
		}
	}
	if(gameWin){
		setTimeout(gameOver,500);
	}
}
function gameOver(){
	document.onmousedown = null;
	document.onmousemove = null;
	document.onmouseup = null;
	document.addEventListener('touchmove', function(e) {
			e.preventDefault();
		});

	document.addEventListener('touchend', function(e) {
			e.preventDefault();
		});
	document.addEventListener('touchstart', function(e) {
			e.preventDefault();
		});
	initPuzzle();
	calculateLevel();
	calculatePoints();
	savePointsToDatabase();
}

function calculateLevel()
{
	if (_puzzleName.indexOf('ceuta') > -1)
	{
		if (_puzzleName.indexOf('casa-dragones'))
			_level = 1;
		else if (_puzzleName.indexOf('parque-maritimo'))
			_level = 2;
		else if (_puzzleName.indexOf('murallas-reales'))
			_level = 3;
	}
	else if (_puzzleName.indexOf('melilla') > -1)
	{
		if (_puzzleName.indexOf('faro-melilla'))
			_level = 4;
		else if (_puzzleName.indexOf('arquitectura-melilla'))
			_level = 5;
		else if (_puzzleName.indexOf('iglesia-purisima-concepcion'))
			_level = 6;
		
		
	}
	else if (_puzzleName.indexOf('malaga') > -1)
	{
		if (_puzzleName.indexOf('jardin-botanico-concepcion-malaga'))
			_level = 7;
		else if (_puzzleName.indexOf('playa-pedregalejo-malaga'))
			_level = 8;
		else if (_puzzleName.indexOf('teatro-romano-malaga'))
			_level = 9;
	}
	else if (_puzzleName.indexOf('segovia') > -1)
	{		
		if (_puzzleName.indexOf('acueducto-segovia'))
			_level = 10;
		else if (_puzzleName.indexOf('alcazar-segovia'))
			_level = 11;
		else if (_puzzleName.indexOf('plaza-artilleria-segovia'))
			_level = 12;
	}
	else if (_puzzleName.indexOf('granada') > -1)
	{
		if (_puzzleName.indexOf('iglesia-santo-domingo-granada'))
			_level = 13;
		else if (_puzzleName.indexOf('parque-federico-garcia-lorca-granada'))
			_level = 14;
		else if (_puzzleName.indexOf('plaza-bib-rambla-granada'))
			_level = 15;
	}
	else if (_puzzleName.indexOf('sevilla') > -1)
	{
		if (_puzzleName.indexOf('portal-palacio-telmo'))
			_level = 16;
		else if (_puzzleName.indexOf('alcazar-sevilla'))
			_level = 17;
		else if (_puzzleName.indexOf('plaza-españa-sevilla'))
			_level = 18;
	}
}


function calculatePoints()
{
	_endTime = new Date().getTime();
	_seconds = (_endTime - _startTime)/1000;
	_stars = 0;
	_points = 0;
	
	if (_puzzleName.indexOf('ceuta') > -1)
	{
		if (_seconds <= 5)
			_stars = 3;
		else if (_seconds <= 10)
			_stars = 2;
		else if (_seconds <= 15)
			_stars = 1;
		
		_points = Math.floor(puzzle_difficulty * 1000 / _seconds);

	}
	else if (_puzzleName.indexOf('melilla') > -1)
	{
		if (_seconds <= 20)
			_stars = 3;
		else if (_seconds <= 40)
			_stars = 2;
		else if (_seconds <= 60)
			_stars = 1;
			
		_points = Math.floor(puzzle_difficulty * 4000 / _seconds);		
		
	}
	else if (_puzzleName.indexOf('malaga') > -1)
	{
		if (_seconds <= 15)
			_stars = 3;
		else if (_seconds <= 30)
			_stars = 2;
		else if (_seconds <= 45)
			_stars = 1;
			
		_points = Math.floor(puzzle_difficulty * 6000 / _seconds);
	}
	else if (_puzzleName.indexOf('segovia') > -1)
	{
		if (_seconds <= 40)
			_stars = 3;
		else if (_seconds <= 80)
			_stars = 2;
		else if (_seconds <= 120)
			_stars = 1;
			
		_points = Math.floor(puzzle_difficulty * 19000 / _seconds);ç
		
	}
	else if (_puzzleName.indexOf('granada') > -1)
	{
		if (_seconds <= 30)
			_stars = 3;
		else if (_seconds <= 60)
			_stars = 2;
		else if (_seconds <= 90)
			_stars = 1;
			
		_points = Math.floor(puzzle_difficulty * 17000 / _seconds);
		
	}
	else if (_puzzleName.indexOf('sevilla') > -1)
	{
		if (_seconds <= 100)
			_stars = 3;
		else if (_seconds <= 200)
			_stars = 2;
		else if (_seconds <= 300)
			_stars = 1;
		
		_points = Math.floor(puzzle_difficulty * 50000 / _seconds);
		
	}
	// Set a dark transparent background
	_canvas = document.getElementById('canvas');
	_stage = _canvas.getContext('2d');
	_stage.fillStyle = 'RGBA(0, 0, 0, 0.5)';
	_stage.fillRect(0, 0, _canvas.width, _canvas.height);
	
	// Build points div
	var _pointsDiv = document.getElementById('points');
	var _starsImg = document.createElement('img');
	var _pointsP = document.createElement('p');

	if (_stars == 1)
		_starsImg.src = 'images/1star.png';
	else if (_stars == 2)
		_starsImg.src = 'images/2stars.png';
	else if (_stars == 3)
		_starsImg.src = 'images/3stars.png';

	_pointsP.innerText = _points + ' puntos';

	_pointsDiv.appendChild(_starsImg);
	_pointsDiv.appendChild(_pointsP);

}

function savePointsToDatabase() {
	// do ajax call to save points
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function f(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			// handle correct response
			//document.getElementById('res').innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","savepoints.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("points="+_points+"&level="+_level);
}

function clearPointsAndStars() {
	var _pointsDiv = document.getElementById('points');
	_pointsDiv.innerHTML = '';
}

function shuffleArray(o){
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
}