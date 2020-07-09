

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image_description` varchar(250) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Author_Artist` varchar(255) NOT NULL,
  `Publisher` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

