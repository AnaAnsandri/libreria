public class Departamento {
    private String nombres;
    private Empleados empleado;
    
    public void assign(Empleados empleado_uno) {
        empleado = empleado_uno;
    }
    public String getEmpleado() {
        return nombres;
    }
     public Departmento(Empleados empleado) {
        this.empleado = empleado;
    }

    public Departamento(String nombre) {
        this.nombre = nombre;
    }
}
