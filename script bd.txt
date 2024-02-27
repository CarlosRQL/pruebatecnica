
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

Base de datos: `prueba_factura`

-- Estructura de tabla para la tabla `datos_factura`

CREATE TABLE `datos_factura` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_tax_per` varchar(250) NOT NULL,
  `order_total_after_tax` double(10,2) NOT NULL,
  `order_amount_paid` decimal(10,2) NOT NULL,
  `order_total_amount_due` decimal(10,2) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
INSERT INTO `datos_factura` (`order_id`, `user_id`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax`, `order_tax_per`, `order_total_after_tax`, `order_amount_paid`, `order_total_amount_due`, `note`) VALUES
(2, 1, '2024-02-27 07:28:01', 'Carlos Quezada', 'Villa Nueva', 1000.00, 50.00, '5', 1050.00, 1050.00, 0.00, 'Cancelado'),
(3, 1, '2024-02-27 16:19:06', 'Andrea B', 'Mixco', 5000.00, 100.00, '2', 5100.00, 5100.00, 0.00, 'dadada');
---

-- Estructura de tabla para la tabla `datos_productos`

CREATE TABLE `datos_productos` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
INSERT INTO `datos_productos` (`order_item_id`, `order_id`, `item_code`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_final_amount`) VALUES
(5, 3, '3', 'Cremas', 10.00, 500.00, 5000.00),
(7, 2, '1', 'Cafe', 10.00, 100.00, 1000.00);

--

-- Estructura de tabla para la tabla `usuarios`

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
INSERT INTO `usuarios` (`id`, `email`, `password`, `first_name`, `last_name`, `mobile`, `address`) VALUES
(1, 'cquezada@agexport.org.gt', '2024..', 'Carlos', 'Quezada', 40282165, 'Villa Nueva'),
(3, 'testagex@agexport.org.gt', '2023..', 'Test', 'Prueba', 24220000, 'Zona 13');
--


-- Indices de la tabla `datos_factura`

ALTER TABLE `datos_factura`
  ADD PRIMARY KEY (`order_id`);

-- Indices de la tabla `datos_productos`

ALTER TABLE `datos_productos`
  ADD PRIMARY KEY (`order_item_id`);

-- Indices de la tabla `usuarios`

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de la tabla `datos_factura`

ALTER TABLE `datos_factura`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- AUTO_INCREMENT de la tabla `datos_productos`
--
ALTER TABLE `datos_productos`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;