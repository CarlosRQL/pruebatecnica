<div class="navigation">
    <div class="pull-left">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Factura
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="lista_facturas.php">Lista de Facturas</a></li>
                <li><a href="crear_factura.php">Nueva Factura</a></li>
            </ul>
        </div>
    </div>
    <div class="pull-left">
        <?php if ($_SESSION['userid']) { ?>
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                    <span><?php echo $_SESSION['user']; ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="action.php?action=logout">Cerrar Sesión</a></li>
                </ul>
            </div>
        <?php } ?>
    </div>
    <div style="clear:both;"></div>
</div>

