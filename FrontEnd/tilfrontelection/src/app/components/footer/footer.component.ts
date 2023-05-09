import { Component, EventEmitter, Input, Output } from '@angular/core';

export interface Region{
  id:number;
  label:string;
}

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent {

  // ! pour l'initialisation
  @Input() region!:Region;
  @Output() emetteur = new EventEmitter<number>();

  maj(){
    this.emetteur.emit(this.region.id);
  }
}


