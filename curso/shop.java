public class shop {
    public static  void main(String[]  args){
        double tax = 0.2;
        double total;
        System.out.println( "Welcome to Duke Choice Shop!");
        String name = "Pinky";
        Customer C1 = new Customer();
        C1.nombre = name;
        System.out.println("Nombre:" + C1.nombre);
        Clothing item1 = new Clothing();
        item1.description = "Blue Jacket";
        item1.price = 20.9;
        item1.size = "M";
        Clothing item2 = new Clothing();
        item2.description = "Orange T-Shirt";
        item2.price = 10.5;
        item2.size = "S";
        System.out.println(item1.description + "," + " " + item1.price + "," + " " + item1.size);
        System.out.println(item2.description + "," + " " + item2.price + "," + " " + item2.size);
        total = item2.price * 2 + item1.price;
        System.out.println( "El total de su compra es:" + total);
    }
}
