public class Departamento {
    private String nombres;
    private Empleado empleados;
    public void asignar(Empleado nuevoEmpleado){
        empleados = nuevoEmpleado;
    }
    public Empleado getEmpleados() {
        return empleados;
    }
}
