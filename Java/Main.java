class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo, ahora si funciono");
        UberX uberX = new UberX("AQM123", new Account("Andres", "AND123"), "Chevrolet", "Sonic");
        // uberX.passenger = 4;
        uberX.setPassenger(4);
        uberX.printDataCar();

        // Car car1 = new Car("ABC789", new Account("Andrea", "AND789"));
        // car1.passenger = 3;
        // car1.printDataCar();

        UberVan uberVan = new UberVan("FGH456", new Account("Andres", "AND123"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }
}