<?php
require_once("soporte.php");

$title = 'PREGUNTAS FRECUENTES';
require('templates/open.php');
?>
<!-- Encabezado -->
<div class="container">
  <div id="secciones" class="interna">
    <section id="preguntasfrecuentes">
      <div class="jumbotron" >
        <div class="container">
          <h2> Preguntas Frecuentes</h2>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- Preguntas Frecuentes -->
<div class="container">

  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">¿Quiénes somos? </a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Ade Guardone es una Pastelería clásica con un giro personal. También tenemos opciones sin TACC. Estamos en Acassuso, Martínez, San Isidro. </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">¿Cómo realizo una compra?</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Es muy fácil y sencillo: </p>

          <p>Navega nuestro Estore desde tu computadora, tablet o celular y elegí la/s torta/s que querés comprar. </p>

          <p>Seleccioná cantidad y agregálas a tu carrito de compras.</p>

          <p>Registrate. Es necesario que estés registrado en nuestro sitio para poder avanzar con tu compra. Si ya tenes tu cuenta creada, solo tenes que ingresar tu dirección de correo electrónico y contraseña. Si sos nuevo, creá tu cuenta.</p>

          <p>Completá tu dirección de facturación y de envío.</p>

          <p>Elegí el método de envío más conveniente y selecciona el medio de pago.</p>

          <p>Realizá una última revisión del resumen de tu pedido y chequeá que toda la información sea correcta. Si queres hacer algún cambio, podes hacer click en “Editar Carrito”. Si estás conforme con el pedido, hace click en “Realizar Pago”.</p>

          <p>Recibirás en tu casilla de correo electrónico un mail de confirmación con tu número de pedido. Si querés consultar el estado de tu orden y hacer un seguimiento del envío, hacé click en Mi Cuenta .</p>

          <p>Por cualquier consulta, escribinos a: contacto@akelapasteleria.com.ar o llamanos al: 11-2634-8891 de Lunes a Viernes de 9hs a 18hs y Sábados de 10hs a 15hs.</p>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">¿Cuáles son los métodos de envío?</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Tenemos servicio de entrega en domicilio.</div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">¿Cuál es el costo del servicio de entrega?</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <p>El valor de la entrega será indicado durante su compra, antes de que el pedido sea finalizado. Este costo corre por cuenta de nuestros clientes.</p>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">¿Cuáles son los medios de pago?</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Se puede realizar el pago a través de de Mercado Pago por medio de tarjeta de crédito o Todo Pago por medio de tarjeta de crédito o débito. El sistema de cobranza a través de tarjeta de crédito es 100% seguro. Los números son encriptados y no sufren ningún tipo de amenaza en nuestro banco de datos, siendo enviados directamente a la administradora de la tarjeta de crédito.</p></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">¿Puedo tener seguimiento de mi pedido?</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
          <p> Si, en cuanto tu pedido se envíe, recibirás una confirmación por correo electrónico con un código de seguimiento. </p>
          <p>También puedes verificar el estado del pedido iniciando sesión en tu cuenta en nuestro sitio web.</p>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">¿Puedo solicitar una decoracion en particular para mi torta?</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Sí! Consultanos en caso de querer personalizar la decoración de tu torta.</p>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">¿Hacen catering para eventos?</a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Tenemos servicio de catering. Consultanos por el tipo de evento y te enviamos un presupuesto.</p>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">¿Hay un importe mínimo de compra?</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">
          <p>El mínimo de compra para envío es de $1000.</p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php require('templates/close.php'); ?>
