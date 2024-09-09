public class ShopApp {
    int count = 0;
    double average = 0;
       for(Clothing item : C1.getItems()){
        if(item.getTalle().equals("L")){
            count++;
            average += item.getPrecio();
        }
    }
       try {
        average = (count == 0) ? 0 : average/count; // * //
        average = average/count;
        System.out.println("Precio promedio: "+average+", cantidad: "+count);
    } catch (ArithmeticException e){
        System.out.println("No se puede dividir por 0");
    }
}
// *
// if (count == 0) {
//  average = 0;
// }else {
//  average = average / count; }

