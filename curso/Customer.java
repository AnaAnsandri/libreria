public class Customer {
    String nombre;
    private String talle;
    private Clothing[] Items;

    public void AgregarItems(Clothing[] Items) {
        this.Items = Items;
    }
    
    
    public Clothing[] getItems() {
        return Items;
    }

    public double getCostoTotalClothing() {
        double total = 0.0;
        for (Clothing item : Items) {
            total += item.getPrecio();
        }
        return total;
    }
   

    public Customer(String nombre) {
        this.nombre = nombre;
    }


    
    public Customer(String nombre, int measurement) {
        this.nombre = nombre;
        setTalle(measurement);
    }


    public Customer(String nombre, String talle) {
        this.nombre = nombre;
        this.talle = talle;
    }

    public String getNombre() {
        return nombre;
    }

    public void setName(String nombre) {
        this.nombre = nombre;
    }

    public String getTalle() {
        return talle;
    }

    public void setSize(String talle) {
        this.talle = talle;
    }

    
    public void seTtalle(int measurement) {
        switch (measurement) {
            case 1, 2, 3:
                setSize("S");
                break;
            case 4, 5, 6:
                setSize("M");
                break;
            case 7, 8, 9:
                setSize("L");
                break;
            default:
                setSize("XL");
        }
    }

}
