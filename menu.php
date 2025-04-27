<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>

.container{
    display: flex;
        position: fixed;
        top: 50px;
        right: -450px;
        width: 100%;
        max-width: 300px;
        background-color: rgb(0, 0, 0);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition:.5s ease;
        font-size: 20px;
        height:90vh;
        border-radius: 25px;
        justify-content: space-between;

}
.container.active{
    right: 0;
}

.hum{

   
  
height: 30px;
width: 50px;
margin-left: auto; 
background-color: rgb(255, 255, 255); 
}
.hum span{
position: absolute;
height: 4px;
width: 60%;
background-color: white;
border-radius: 50px;
transition: .3s ease;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
}

.hum span:nth-child(1){
top: 20%;


}


.hum span:nth-child(3){
top: 75%;

}

.hum.active span:nth-child(1){
top: 50%;
transform: translate(-50%,-50%) rotate(45deg);
}

.hum.active span:nth-child(2){
opacity: 0;

}
.hum.active span:nth-child(3){
top: 50%;
transform: translate(-50%,-50%) rotate(-45deg);   
}

    </style>
</head>
<body>
    <div class="container">
 

   <a href="#">logout</a>
   <a href="#">sign up</a>

   <a href="#">logout</a>
   <a href="#">sign up</a>
   <a href="#">logout</a>
   <a href="#">sign up</a>

    </div>
    <div class="hum">
    <i class="fa fa-bars"></i>
    <span></span>
    <span></span>
    <span></span>


    </div>
    <script>
    const humMenu = document.querySelector('.hum');
    const containerMenu = document.querySelector('.container');

    humMenu.addEventListener('click', () => {
        humMenu.classList.toggle('active');
        containerMenu.classList.toggle('active');
    });
  </script>
</body>
</html>