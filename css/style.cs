
    main {
      margin:0 auto;
      width:50%;
      max-width:50%;
      min-width:50%;
    }

    body {
      padding:0;
      margin:0;
/*      overflow-y:hidden;/*quito el scroll vertical*/
      background-image:url(http://lawsca.org/wp-content/uploads/2016/02/In-Blue-Only-Yet-There-Really-Are-Changes-You-Won-t-Ever-be-Bored-in-Vision-HD-Single-Color-Wallpaper1.jpg);
      background-size:cover;
     }

     @media only screen and (max-width:960px){
    body{
        overflow-y:scroll;
    }

    main {
      margin:0 auto;
      width:100%;
      max-width:100%;
      min-width:100%;
    }    
}

    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }

    .login {

      display: inline-block; 
      padding:30px 30px 0px 30px;
      border: 1px solid #EEE;
      
    }

    .text-center{

      text-align:center;
    }

    .page-footer{
      background-color:black;
    }

    .iniciar{
      
      background-color:black;

    }
