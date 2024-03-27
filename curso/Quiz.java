public class Quiz {
    public static void main(String[] args) {
        Empleado nuevoempleado = new Empleado();
        Departamento dept = BuscadorDepartamento.buscar();
        dept.asignar(nuevoempleado);
        System.out.print(dept.getEmpleados());
    }
}
