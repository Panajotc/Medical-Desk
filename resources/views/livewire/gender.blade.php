<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div id="gender">
          
          <div class="mb-3">
            <input class="form-check-input" type="radio" name="{{$name}}" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">M</label>
          </div>


        <style>
        #gender {
         display:inline-flex;
        
        }
        #gender .form-check-input {
        
          margin-top:12px;
        }
        #gender .form-check-label {
         padding-top:0px;
         padding-left:10px;
        }
         
        @media (max-width: 414px){
          #gender .form-check-input {
        
        margin-top:4px;
      }
      #gender .mb-3{
        margin-left:14px;
      }
        }
        
        </style>