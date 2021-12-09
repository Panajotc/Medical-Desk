<div id="feedback_issue" wire:click="show({{$btn}})">

  <input type="radio" id="{{$btn}}" name="button" value="{{$btnvalue}}">
  <label for="{{$btn}}" class="label_exp">{{$date}}</label>
</div>


















<style>
  #feedback_issue {
    display: flex;
    justify-content: center;
    margin: 20px 28px 20px 0px;
    width: 165px;
    height: 40px;
    border: 2px solid #0FB7B6;
    border-radius: 5px;
  }

  .label_exp {

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

  input[type="radio"]:checked+label {
    background-color: #0FB7B6;
    color: white;
    width: 165px;
    height: 40px;
    border-radius: 5px;
  }


  @media (max-width: 414px){
  #feedback_issue {
    margin-bottom: -20px;
    
  }
}
</style>