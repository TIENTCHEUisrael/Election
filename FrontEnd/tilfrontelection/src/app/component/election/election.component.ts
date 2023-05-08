import { Component } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { Election } from 'src/app/model/election.model';
import { ElectionService } from 'src/app/service/election/election.service';
import { ApiService } from 'src/app/service/region/api.service';

declare var window:any;
@Component({
  selector: 'app-election',
  templateUrl: './election.component.html',
  styleUrls: ['./election.component.scss']
})
export class ElectionComponent {
  ElectionData!:any;
  formModal:any;
  formValue!:FormGroup;
  number!:number;
  showAdd!:boolean;
  showUpdate!:boolean;
  electionModel: Election = new Election();

  constructor(private formbuilder:FormBuilder,private api: ElectionService){}

  ngOnInit(): void{
    this.number=-1;
    this.formModal = new window.bootstrap.Modal(
      document.getElementById('exampleModal')
    );
    this.formValue = this.formbuilder.group({
      label : [''],
      description: [''],
      status: [''],
      date: ['']
    })
    this.getElection();
  }
  openModal(){
    this.formModal.show()
  }
  doSomeThing(){
    this.formModal.hide();
  }

  clickAddElection(){
    this.formValue.reset();
    this.showAdd = true;
    this.showUpdate= false;
  }

  getElection() {
    this.api.getElection().subscribe(res=>{
      this.ElectionData = res;
      console.log(res);
    })
  }
  deleteElection(election: any){
    this.api.deleteElection(election.id).subscribe(res=>{
      alert('suppresion effectue avec sucess');
      this.getElection();
    })

  }
  postElection(){
    this.electionModel.label = this.formValue.value.label;
    this.electionModel.description = this.formValue.value.description;
    this.electionModel.date =  this.formValue.value.date;
    this.electionModel.status = this.formValue.value.status;
    this.api.postElection(this.electionModel).subscribe(res=>{
      console.log(res);
      console.log(this.electionModel);
      alert('Election Enregistree avec succcess')
      this.formValue.reset();
      let ref = document.getElementById("cancel");
      ref?.click();
    },
    err=>{
      alert("Echec de l'ajout");
    })

    }

  modifierElection(election: any){
    this.showAdd = false;
    this.showUpdate = true;
    this.ElectionData.id = election.id;
    this.number = election.id;
    this.formValue.controls['label'].setValue(election.label);
    this.formValue.controls['description'].setValue(election.description);
    this.formValue.controls['status'].setValue(election.status);
    this.formValue.controls['date'].setValue(election.date);

  }

  updateElection(){
    this.electionModel.label = this.formValue.value.label;
    this.electionModel.description = this.formValue.value.description;
    this.electionModel.date =  this.formValue.value.date;
    this.electionModel.status = this.formValue.value.status;
    this.api.updateElection(this.electionModel,this.number).subscribe(res=>{
      alert('mise ajour reussi')
      this.formValue.reset();
      let ref = document.getElementById("cancel");
      ref?.click();
      this.getElection();

    })

  }

}
