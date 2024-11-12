## Примеры для каждого из принципов ООП и SOLID

### Принципы ООП

1. **Наследование**
   Наследование позволяет создать новый класс на основе уже существующего.

   ```php
   class Animal {
       public function sound() {
           return "Some sound";
       }
   }

   class Dog extends Animal {
       public function sound() {
           return "Bark";
       }
   }

   $dog = new Dog();
   echo $dog->sound(); // Выведет "Bark"
   ```

2. **Инкапсуляция**
   Инкапсуляция ограничивает доступ к данным и методам внутри объекта.

   ```php
   class BankAccount {
       private $balance = 0;

       public function deposit($amount) {
           if ($amount > 0) {
               $this->balance += $amount;
           }
       }

       public function getBalance() {
           return $this->balance;
       }
   }

   $account = new BankAccount();
   $account->deposit(100);
   echo $account->getBalance(); // Выведет 100
   ```

3. **Полиморфизм**
   Полиморфизм позволяет объектам различных классов обрабатывать одинаковые сообщения (методы).

   ```php
   interface Shape {
       public function area();
   }

   class Circle implements Shape {
       private $radius;

       public function __construct($radius) {
           $this->radius = $radius;
       }

       public function area() {
           return pi() * pow($this->radius, 2);
       }
   }

   class Rectangle implements Shape {
       private $width, $height;

       public function __construct($width, $height) {
           $this->width = $width;
           $this->height = $height;
       }

       public function area() {
           return $this->width * $this->height;
       }
   }

   function printArea(Shape $shape) {
       echo $shape->area();
   }

   printArea(new Circle(5)); // Выведет площадь круга
   printArea(new Rectangle(4, 5)); // Выведет площадь прямоугольника
   ```

4. **Абстракция**
   Абстракция позволяет скрыть детали реализации и показать только основные характеристики.

   ```php
   abstract class Vehicle {
       abstract public function startEngine();

       public function stopEngine() {
           echo "Engine stopped";
       }
   }

   class Car extends Vehicle {
       public function startEngine() {
           echo "Car engine started";
       }
   }

   $car = new Car();
   $car->startEngine(); // Выведет "Car engine started"
   ```

### Принципы SOLID

1. **Single Responsibility Principle (SRP) - Принцип единственной ответственности**
   Каждый класс должен отвечать за что-то одно.

   ```php
   class User {
       public $name;
       public $email;
       // только данные пользователя
   }

   class UserRepository {
       public function save(User $user) {
           // сохраняет пользователя в базу данных
       }
   }
   ```

2. **Open/Closed Principle (OCP) - Принцип открытости/закрытости**
   Классы должны быть открыты для расширения, но закрыты для модификации.

   ```php
   interface Logger {
       public function log($message);
   }

   class FileLogger implements Logger {
       public function log($message) {
           file_put_contents('log.txt', $message, FILE_APPEND);
       }
   }

   class Application {
       private $logger;

       public function __construct(Logger $logger) {
           $this->logger = $logger;
       }

       public function run() {
           $this->logger->log("Application started");
       }
   }

   $app = new Application(new FileLogger());
   $app->run();
   ```

3. **Liskov Substitution Principle (LSP) - Принцип подстановки Барбары Лисков**
   Объекты должны быть заменяемы экземплярами их подклассов без изменения корректности программы.

   ```php
   class Bird {
       public function fly() {
           return "Flying";
       }
   }

   class Sparrow extends Bird {
       // Наследует метод fly
   }

   function makeBirdFly(Bird $bird) {
       echo $bird->fly();
   }

   makeBirdFly(new Sparrow()); // Сработает, так как Sparrow ведет себя как Bird
   ```

4. **Interface Segregation Principle (ISP) - Принцип разделения интерфейса**
   Лучше создавать несколько специализированных интерфейсов, чем один универсальный.

   ```php
   interface Printer {
       public function print();
   }

   interface Scanner {
       public function scan();
   }

   class AllInOnePrinter implements Printer, Scanner {
       public function print() {
           echo "Printing...";
       }

       public function scan() {
           echo "Scanning...";
       }
   }

   class SimplePrinter implements Printer {
       public function print() {
           echo "Printing...";
       }
   }
   ```

5. **Dependency Inversion Principle (DIP) - Принцип инверсии зависимостей**
   Высокоуровневые модули не должны зависеть от низкоуровневых; они должны зависеть от абстракций.

   ```php
   interface PaymentMethod {
       public function pay($amount);
   }

   class CreditCardPayment implements PaymentMethod {
       public function pay($amount) {
           echo "Paying with credit card: $amount";
       }
   }

   class ShoppingCart {
       private $paymentMethod;

       public function __construct(PaymentMethod $paymentMethod) {
           $this->paymentMethod = $paymentMethod;
       }

       public function checkout($amount) {
           $this->paymentMethod->pay($amount);
       }
   }

   $cart = new ShoppingCart(new CreditCardPayment());
   $cart->checkout(100); // Выведет "Paying with credit card: 100"
   ```