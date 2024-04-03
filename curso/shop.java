public class shop {
    public static  void main(String[] args){
        double tax = 0.2;
        double total = 0.0;
        System.out.println( "Welcome to Duke Choice Shop!");
        Customer cliente_uno = new Customer("Pinky", 3);
        System.out.println("Customer is: " + cliente_uno);
        System.out.println("Minimun Price: " + Clothing.minPrecio);
        System.out.println("Minimun Tax: " + Clothing.minTax);

        char talle = 0;
        Clothing Item1 = new Clothing("Blue Jacket",20.9,"M");
        Clothing Item2 = new Clothing("Orange T-shirt",10.5,"S");

        Clothing[] Items = {Item1, Item2, new Clothing("Green Scarf", 5, "S"), new Clothing("Blue T-Shirt", 10.5, "S")};
        System.out.println("Item 1: " + Item1 + ", " + Item1 + ", " + Item1 + ".");
        System.out.println("Item 2: " + Item2 + ", " + Item2 + ", " + Item2 + ".");

        /total = (item1Price.getPrecio() * 2 + item1Price.getPrice()) * (1 + tax);

        for (Clothing item : Items) {
            total += item.getPrecio();
             if (cliente_uno.getTalle().equals(item.getTalle())) {
                total = total + (total * tax);
                System.out.println("Suma total: $" + total);
                System.out.println("Descripcion: " + item.getDescripcion());
                if (total > 15) {
                    break;
                }
            }
        }

        Items[2].setDescription("Green Scarf", 5, "S");
        Items[3].setDescription("Blue T-Shirt", 10.5, "S");

        System.out.println("El cliente es " + cliente_uno.getName() + ".");
        System.out.println("El talle es " + cliente_uno.getSize() + ".");
        System.out.println("El total es: " + cliente_uno.getTotalClothingCost() + ".");

        for (Clothing description: cliente_uno.getItems()) {
            System.out.println("descripcion: " + descripcion.getDescripcion());



        C1.nombre = name;
        System.out.println("Nombre:" + cliente_uno.nombre);
        Clothing Item1 = new Clothing();
        item1.description = "Blue Jacket";
        item1.Precio = 20.9;
        item1.talle = "M";
        Clothing Item2 = new Clothing();
        item2.description = "Orange T-Shirt";
        item2.Precio = 10.5;
        item2.talle = "S";
        System.out.println(item1.description + "," + " " + item1.Precio + "," + " " + item1.talle);
        System.out.println(item2.description + "," + " " + item2.Precio + "," + " " + item2.talle);
        total = item2.Precio * 2 + item1.Precio;
        System.out.println( "El total de su compra es:" + total);
    }
}
