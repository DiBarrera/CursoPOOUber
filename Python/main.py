from car import Car

if __name__ == "__main__":
    print("Hola Mundo")

    car = Car()
    car.license = "ABC123"
    car.driver = "Gerardo"
    print(vars(car))

    car1 = Car()
    car1.license = "XYZ789"
    car1.driver = "Jesus"
    print(vars(car1))