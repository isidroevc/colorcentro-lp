<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!--<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .contenedor {
            width: 90%;
            max-width: 750px;
            margin: auto;

            /* Flexbox */
            display: flex;
            flex-flow: row wrap;
        }

        header {
            background: #000000;
            width: 100%;
            padding: 20px;

            /* Flexbox */
            display: flex;
            justify-content: space-between;
            align-items: center;

            flex-direction: row;
            flex-wrap: wrap;
            color:  #FFFFFF;
            font-family: "Helvetica"
        }

        .texto-mensaje {
          font-family: "Helvetica";
          font-size: 28px;
          text-align: justify;
        }

        .contenido-mensaje {
          margin: 10%;
        }
        p.align-right {
          font-family: Helvetica;
          font-size: 24px;
          text-align: right;
          margin-right: 10%;
        }

        div.contacto {
          width: 100%;
          display: flex;
          flex-direction: column;
          justify-content: flex-end;
          flex-wrap: wrap-reverse;
        }
        .footer {
          width: 100%;
          background: #000;
          font-family: Helvetica;
          color: #FFF;
        }
    </style>-->
</head>

<body>
    <div class="contenedor">
        <header>
            <h2>Nuevo mensaje</h2>
        </header>
        <div class="contenido-mensaje">
          <p class = "texto-mensaje">
           {{$carga['mensaje']}}
          </p>
        </div>
        <div class="contacto">
        <h3>Contacto</h3>
          <p class = "align-right">{{$carga['nombre']}}
          <br>{{$carga['compania']}}
          <br>{{$carga['email']}}</p>
        </div>

        <div class="footer">
          <p>Mensaje enviado desde colorcentro.com.mx el {{$carga['fecha']}}</p>
        </div>
    </div>
</body>

</html>
