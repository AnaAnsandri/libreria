public class Clothing {
    String descripcion;
    Double Precio;
    String talle = "S";
    public final static double minPrecio = 8.0;
    public final static double minTax = 0.5;


    public Clothing(String descripcion, double Precio, String talle) {
        this.descripcion = descripcion;
        this.Precio = Precio;
        this.talle = talle;
    }

    public Clothing(String descripcion, String talle) {
        this.descripcion = desccripcion;
        this.talle = talle;
    }
    public Clothing(double Precio) {
        this.Precio = Precio;
    }

    public Clothing() {
    }

    public Clothing(String talle) {
        this.talle = talle;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getalle() {
        return talle;
    }
     public String getdescripcion() {
        return descripcion;
    }

    public void setSize(String talle) {
        this.talle = talle;
    }

    public void setdescripcion(String descricion, double Precio, String talle) {
        this.descripcion = descripcion;
        this.Precio = Precio;
        this.talle = talle;
    }
    
    public double Precio() {
        return Precio + (Precio * minTax);
    }

    public void setPrecio(double Precio) {
        if (Precio > minPrecio){
            this.Precio = Precio;
        }
    }

    }


