<div class="selectora">

<input  type="radio" id="{{$bt}}" name="orari" value="{{$val}}">
<label for="{{$bt}}" class="label">lunedi 27</label>
</div>

<style>
.selectora {
  display: flex;
  justify-content: center;
  margin:20px 28px 20px 0px;
  width: 165px;
  height: 40px;
  border: 2px solid #0FB7B6;
  border-radius:5px;
}
.label {
      
      cursor: pointer;
      text-align: center;
      font-size: 18px;
      padding: 8px 10px;
      margin-top: -4px;
      margin-bottom: 0;
     
  }
   input[type="radio"] {
      display: none;
 
  } 

  input[type="radio"]:checked + label {
      background-color:#0FB7B6;
      color:white;
      width: 163px;
      height: 38px;
      border-radius:5px;
      margin-top:0.5px;
  }
</style>