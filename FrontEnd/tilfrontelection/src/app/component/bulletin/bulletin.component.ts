import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { Bulletin } from 'src/app/model/bulletin.model';
import { BulletinService } from 'src/app/service/bulletin/bulletin.service';


declare var window: any;

@Component({
  selector: 'app-bulletin',
  templateUrl: './bulletin.component.html',
  styleUrls: ['./bulletin.component.scss']
})
export class BulletinComponent {
  BulletinData!: any;
  formModal!:any;
  formValue!:FormGroup;
  number!:any;
  showAdd!:boolean;
  showUpdate!:boolean;
  bulletinModel: Bulletin = new Bulletin()

  constructor(private formbuilder: FormBuilder, private api: BulletinService){}


  ngOnInit(): void{

    this.number=-1;
    this.formModal = new window.bootstrap.Modal(
      document.getElementById('exampleModal')
    );
    this.formValue = this.formbuilder.group({
      label : [''],
      Couleur: [''],
      Photo: [''],
    })
    this.getBulletin();
  }

  openModal(){
    this.formModal.show();

  }
  doSomeThing(){
    this.formModal.hide();
  }
  clickAddBulletin(){
    this.formValue.reset();
    this.showAdd = true;
    this.showUpdate= false;
  }

  postBulletin(){
    this.bulletinModel.label = this.formValue.value.label;
    this.bulletinModel.couleur = this.formValue.value.Couleur;
    this.bulletinModel.photo = this.formValue.value.label;
    this.api.postBulletin(this.bulletinModel).subscribe(res=>{
      console.log(res);
      console.log(this.bulletinModel);
      alert('Bulletin Enregistree avec succcess')
      this.formValue.reset();
      let ref = document.getElementById("cancel");
      ref?.click();
    },
    err=>{
      alert("Echec de l'ajout");
    }
    )

  }

  getBulletin(){
    this.api.getBulletin().subscribe(res=>{
      this.BulletinData = res;
      console.log(res);
    })
  }

  deleteBulletin(bulletin: any){
    this.api.deleteBulletin(bulletin.id).subscribe(res=>{
      alert('bulletin supprime avec success')
      this.getBulletin();
    })

  }

  modifierBulletin(bulletin: any){
    this.showAdd = false;
    this.showUpdate = true;
    this.bulletinModel.id= bulletin.id;
    this.number = bulletin.id;
    this.formValue.controls['label'].setValue(bulletin.label);
    this.formValue.controls['Couleur'].setValue(bulletin.Couleur);
    this.formValue.controls['Photo'].setValue(bulletin.Photo);

  }

  updateBulletin(){
    this.bulletinModel.label = this.formValue.value.label;
    this.bulletinModel.couleur = this.formValue.value.Couleur;
    this.bulletinModel.photo = this.formValue.value.Photo;
    this.api.updateBulletin(this.bulletinModel,this.number).subscribe(res=>{

      alert('mise ajour effectue avec sucess');
      this.formValue.reset();
      let ref = document.getElementById("cancel");
      ref?.click();
      this.getBulletin();
    })
  }



}
