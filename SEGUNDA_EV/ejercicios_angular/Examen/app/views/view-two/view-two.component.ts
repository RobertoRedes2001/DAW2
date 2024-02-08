import { Component } from '@angular/core';
import { BallinService } from '../../services/ballin.service';
import { Datum,Position,Conference } from '../../interfaces/ballin.interfaces';
import { CardComponent } from '../../components/card/card.component';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-view-two',
  standalone: true,
  imports: [CardComponent,ModalComponent],
  templateUrl: './view-two.component.html',
  styleUrl: './view-two.component.css'
})
export class ViewTwoComponent {
  public constructor(public service : BallinService ){}
  public requestedData : Datum[] = [];
  public modal = 'modal';
  public page : number = 1;
  public photo : string = 'https://graffica.info/wp-content/uploads/2017/08/NBA-logo-png-download-free-1200x675.png';
  public maxPages : number = 53;
  public datum: Datum = {
    id: 0,
    first_name: '',
    height_feet: null,
    height_inches: null,
    last_name: '',
    position: Position.Empty,
    team: {
        id: 0,
        abbreviation: '',
        city: '',
        conference: Conference.Empty,
        division: '',
        full_name: '',
        name: ''
    },
    weight_pounds: null
};

  public stats : string [] = [];

  public viewModal = false;

  public onModal(c : Datum, modal : {modal:string,viewModal:boolean}){
    this.modal = modal.modal;
    this.viewModal = modal.viewModal;
    this.datum = c;
  }

  onCloseModal(close:string){
    this.modal = close;
    this.viewModal = false;
  }

  onRequest() : void{
    this.service.getResponse(this.page).subscribe((response) => {
      this.requestedData = response.data;
    });
  }

 /*  onRequestStats() : void{
    this.service.getResponseStats(this.datum.id).subscribe((responseStats) => {
      responseStats.data[0].
    });
  } */

  public nextPage() : void{
    if(this.page>=this.maxPages){
      this.page = 1;
      this.onRequest();
    }else{
      this.page++;
      this.onRequest();
    }
  }

  public lastPage() : void{
    if(this.page===1){
      this.page = this.maxPages;
      this.onRequest();
    }else{
      this.page--;
      this.onRequest();
    }
  }

  ngOnInit(){
    this.onRequest();
  }

}
