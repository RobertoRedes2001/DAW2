import { Component } from '@angular/core';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-view-three',
  standalone: true,
  imports: [ModalComponent],
  templateUrl: './view-three.component.html',
  styleUrl: './view-three.component.css'
})
export class ViewThreeComponent {

  public modal = 'modal';
  public viewModal = false;

  public choosed : string = 'Frutas';

  public fruits : {name : string, photo : string}[] = [
    {name : "Banana", photo : "https://s1.eestatic.com/2021/03/09/ciencia/nutricion/564704609_174935756_1706x960.jpg"},
    {name : "Taronja", photo : "https://www.ocu.org/-/media/ocu/images/home/alimentacion/alimentos/naranjas_800x450.jpg?rev=b62ade22-d689-46b3-9aab-f52376e0c534&mw=660&hash=D52A46A597C765C56565652D0086F140"},
    {name : "Manzana", photo : "https://cdn1.img.sputniknews.lat/img/07e6/0b/08/1132232783_0:257:2731:1793_1920x0_80_0_0_fdbda0e88e9a5ad09cdcc6a7a315c196.jpg"},
    {name : "Pera", photo : "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWc2SqzTiwf1tQ44hZKyJAomr7zLFVz4Vl7Q&usqp=CAU"},
    {name : "Kiwi", photo : "https://as01.epimg.net/deporteyvida/imagenes/2018/07/14/portada/1531577760_565615_1531577889_noticia_normal.jpg"},
  ];

  public vegetables: { name: string, photo: string }[] = [
    { name: "Lechuga", photo: "https://www.lavanguardia.com/files/og_thumbnail/uploads/2021/03/05/60421be64918d.jpeg" },
    { name: "Berenjena", photo: "https://estaticos-cdn.prensaiberica.es/clip/7d08691e-b082-4540-ad4f-51dc14f8d23b_16-9-aspect-ratio_default_0.jpg" },
    { name: "Cebolla", photo: "https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2023/10/02/morada-blanca-charlota-para-que-se-utiliza-cada-tipo-de-cebolla.jpeg" },
    { name: "Tomate", photo: "https://static.eldiario.es/clip/73e21c3e-541d-4911-b3c4-ed2d64f3b164_16-9-aspect-ratio_default_0.jpg" },
    { name: "Zanahoria", photo: "https://s1.eestatic.com/2019/10/04/ciencia/nutricion/verduras-frutas-nutricion_434216860_134609502_1706x960.jpg" }
  ];

  public selected : { name: string, photo: string } = { name: "", photo: "" };

  onModal(){
    this.modal = "modal show-modal";
    this.viewModal = true;
  }

  onCloseModal(close:string){
    this.modal = close;
    this.viewModal = false;
  }

  public onSelect(pick : { name: string, photo: string }){
    this.selected = pick;
  }

  public selectFruits(){
    if(this.choosed!='Frutas'){
      this.choosed='Frutas';
      this.selected = { name: "", photo: "" };
    }
  }

  public selectVegetables(){
    if(this.choosed!='Verduras'){
      this.choosed='Verduras';
      this.selected = { name: "", photo: "" };
    }

}
}
