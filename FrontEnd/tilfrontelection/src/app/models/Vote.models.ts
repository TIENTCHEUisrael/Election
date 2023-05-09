import { Bulletin } from "./Bulletin.models";
import { Election } from "./Election.models";
import { Participant } from "./Participant.models";

export class Region {

  public Id!:number;
  public date!:Date;
  public id_election!:Election
  public id_bulletin!:Bulletin
  public id_participant!:Participant
  constructor() {

  }
}
