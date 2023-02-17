<div class="calculator">
  <input type="text" id="result" value="0">
  <button onclick="clearScreen()">CE</button>
  <button onclick="backspace()"><-</button>
  <button onclick="insert('/')">/</button>
  <button onclick="insert('*')">*</button>
  <button onclick="insert('7')">7</button>
  <button onclick="insert('8')">8</button>
  <button onclick="insert('9')">9</button>
  <button onclick="insert('-')">-</button>
  <button onclick="insert('4')">4</button>
  <button onclick="insert('5')">5</button>
  <button onclick="insert('6')">6</button>
  <button onclick="insert('+')">+</button>
  <button onclick="insert('1')">1</button>
  <button onclick="insert('2')">2</button>
  <button onclick="insert('3')">3</button>
  <button onclick="calculate()">=</button>
  <button onclick="insert('0')">0</button>
  <button onclick="insert('.')">.</button>
  <button onclick="squareRoot()">Sqrt</button>
  <button onclick="percent()">%</button>
  <button onclick="reciprocal()">1/x</button>
</div>
<script> 
.calculator {
  width: 220px;
  border: 1px solid #ccc;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 2px 2px 5px #ccc;
  text-align: center;
}

.calculator input[type=text] {
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  font-size: 20px;
  text-align: right;
  border: none;
  background-color: #f2f2f2;
  border-radius: 5px;
}

.calculator button {
  width: 50px;
  height: 50px;
  font-size: 20px;
  margin: 5px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  cursor: pointer;
}

.calculator button:hover {
  background-color: #d9d9d9;
}

.calculator button:active {
  background-color: #bfbfbf;
}

</script>