<!DOCTYPE html>
<html>
<head>
  <title>Jeu du morpion</title>
  <style>
    table {
      border-collapse: collapse;
    }
    td {
      width: 100px;
      height: 100px;
      border: 1px solid black;
      text-align: center;
      font-size: 50px;
      cursor: pointer;
    }
    td.x {
      color: red;
    }
    td.o {
      color: blue;
    }
    #message {
      margin-top: 20px;
      font-size: 30px;
      font-weight: bold;
      color: green;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <td><button type="button" onclick="play(this)">-</button></td>
      <td><button type="button" onclick="play(this)">-</button></td>
      <td><button type="button" onclick="play(this)">-</button></td>
    </tr>
    <tr>
      <td><button type="button" onclick="play(this)">-</button></td>
      <td><button type="button" onclick="play(this)">-</button></td>
      <td><button type="button" onclick="play(this)">-</button></td>
    </tr>
    <tr>
      <td><button type="button" onclick="play(this)">-</button></td>
      <td><button type="button" onclick="play(this)">-</button></td>
      <td><button type="button" onclick="play(this)">-</button></td>
    </tr>
  </table>
  <div id="message"></div>
  <button type="button" onclick="reset()">Réinitialiser la partie</button>
  <script>
    var player = 'X';
    var buttons = document.querySelectorAll('button');
    var message = document.getElementById('message');

    function play(button) {
      if (button.innerText !== '-') {
        return;
      }
      button.classList.add(player.toLowerCase());
      button.innerText = player;
      if (checkWin()) {
        message.innerText = player + ' a gagné';
        reset();
      } else if (checkDraw()) {
        message.innerText = 'Match nul';
        reset();
      } else {
        player = player === 'X' ? 'O' : 'X';
      }
    }

    function checkWin() {
      var patterns = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // lignes
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // colonnes
        [0, 4, 8], [2, 4, 6]             // diagonales
      ];
      return patterns.some(function(pattern) {
        return pattern.every(function(index) {
          return buttons[index].classList.contains(player.toLowerCase());
        });
      });
    }

    function checkDraw() {
      return Array.from(buttons).every(function(button) {
        return button.innerText !== '-';
      });
    }

    function reset() {
      player = 'X';
      Array.from(buttons).forEach(function(button) {
        button.innerText = '-';
        button.classList.remove('x', 'o');
      });
      message.innerText = '';
    }
  </script>
</body>
</html>