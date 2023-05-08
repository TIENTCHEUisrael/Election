import { outputAst } from '@angular/compiler';
import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { Region } from '../header/header.component';

/*export interface Region{
  id:number;
  label: string;
}*/

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent implements OnInit {

  constructor() { }
  @Input() region!:Region;
  @Output() emetteur = new  EventEmitter<number>();

  ngOnInit(): void {
  }

  maj(){
    this.emetteur.emit(this.region.id);
  }

}
