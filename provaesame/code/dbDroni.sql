CREATE DATABASE dbShipment;

USE dbShipment

CREATE TABLE tbSupplier(
    sup_vat VARCHAR(11) NOT NULL, 
    sup_email VARCHAR(30) NOT NULL,
    sup_pnumber INT(10) NOT NULL,
    sup_name VARCHAR(20) NOT NULL,
    sup_address VARCHAR(30) NOT NULL,
    PRIMARY KEY(sup_vat)
);

CREATE TABLE tbHub(
    hub_code VARCHAR(11) NOT NULL,
    hub_email VARCHAR(30) NOT NULL,
    hub_pnumber INT(10) NOT NULL,
    hub_address VARCHAR(30) NOT NULL,
    hub_storage INT(10) NOT NULL,
    PRIMARY KEY(hub_code)
);

CREATE TABLE tbPack(
    pa_code VARCHAR(11) NOT NULL,
    pa_weight INT(4) NOT NULL,
    pa_size_height INT(4) NOT NULL,
    pa_size_width INT(4) NOT NULL,
    pa_size_depth INT(4) NOT NULL,
    pa_supplier VARCHAR(11) NOT NULL,
    pa_hub VARCHAR(11) NOT NULL,
    PRIMARY KEY(pa_code),
    FOREIGN KEY(pa_supplier) REFERENCES tbSupplier(sup_vat) ON DELETE RESTRICT ON UPDATE RESTRICT,
    FOREIGN KEY(pa_hub) REFERENCES tbHub(hub_code) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE tbWorker(
    wk_cf VARCHAR(16) NOT NULL,
    wk_name VARCHAR(20) NOT NULL,
    wk_surname VARCHAR(15) NOT NULL,
    wk_address VARCHAR(30) NOT NULL,
    wk_pnumber INT(10) NOT NULL,
    wk_task VARCHAR(30) NOT NULL,
    wk_hub VARCHAR(11) NOT NULL,
    PRIMARY KEY(wk_cf),
    FOREIGN KEY(wk_hub) REFERENCES tbHub(hub_code) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE tbDrone(
    dr_code VARCHAR(7) NOT NULL,
    dr_brand VARCHAR(15),
    dr_model VARCHAR(15) NOT NULL,
    dr_hub VARCHAR(11) NOT NULL,
    PRIMARY KEY(dr_code),
    FOREIGN KEY(dr_hub) REFERENCES tbHub(hub_code) ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE tbShop(
    sh_vat VARCHAR(11) NOT NULL,
    sh_name VARCHAR(30) NOT NULL,
    sh_email VARCHAR(30) NOT NULL,
    sh_pnumber INT(10) NOT NULL,
    sh_address VARCHAR(30) NOT NULL,
    PRIMARY KEY(sh_vat)
);

CREATE TABLE tbCustomer(
    ctr_code VARCHAR(15) NOT NULL,
    ctr_name VARCHAR(20) NOT NULL,
    ctr_surname VARCHAR(15) NOT NULL,
    ctr_address VARCHAR(30) NOT NULL,
    ctr_pnumber INT(10) NOT NULL,
    PRIMARY KEY(ctr_code)
);

CREATE TABLE tbDelivery(
    dly_code VARCHAR(20) NOT NULL, 
    dly_status VARCHAR(15) NOT NULL,
    dly_pack VARCHAR(11) NOT NULL,
    dly_drone VARCHAR(7) NOT NULL,
    dly_shop VARCHAR(11) NOT NULL,
    dly_customer VARCHAR(15) NOT NULL,
    PRIMARY KEY(dly_code),
    FOREIGN KEY(dly_pack)  REFERENCES tbPack(pa_code) ON DELETE RESTRICT ON UPDATE RESTRICT,
    FOREIGN KEY(dly_drone)  REFERENCES tbDrone(dr_code) ON DELETE RESTRICT ON UPDATE RESTRICT,
    FOREIGN KEY(dly_shop)  REFERENCES tbShop(sh_vat) ON DELETE RESTRICT ON UPDATE RESTRICT,
    FOREIGN KEY(dly_customer)  REFERENCES tbCustomer(ctr_code) ON DELETE RESTRICT ON UPDATE RESTRICT
);