export interface BallinStats {
    data: Datum[];
    meta: Meta;
}

export interface Datum {
    id:       number;
    ast:      number | null;
    blk:      number | null;
    dreb:     number | null;
    fg3_pct:  number | null;
    fg3a:     number | null;
    fg3m:     number | null;
    fg_pct:   number | null;
    fga:      number | null;
    fgm:      number | null;
    ft_pct:   number | null;
    fta:      number | null;
    ftm:      number | null;
    game:     Game;
    min:      null | string;
    oreb:     number | null;
    pf:       number | null;
    player:   Player;
    pts:      number | null;
    reb:      number | null;
    stl:      number | null;
    team:     Team;
    turnover: number | null;
}

export interface Game {
    id:                 number;
    date:               Date;
    home_team_id:       number;
    home_team_score:    number;
    period:             number;
    postseason:         boolean;
    season:             number;
    status:             Status;
    time:               Time;
    visitor_team_id:    number;
    visitor_team_score: number;
}

export enum Status {
    Final = "Final",
}

export enum Time {
    Empty = " ",
}

export interface Player {
    id:            number;
    first_name:    FirstName;
    height_feet:   null;
    height_inches: null;
    last_name:     LastName;
    position:      string;
    team_id:       number;
    weight_pounds: null;
}

export enum FirstName {
    Duane = "Duane",
}

export enum LastName {
    Ferrell = "Ferrell",
}

export interface Team {
    id:           number;
    abbreviation: Abbreviation;
    city:         City;
    conference:   Conference;
    division:     Division;
    full_name:    FullName;
    name:         Name;
}

export enum Abbreviation {
    Atl = "ATL",
    Gsw = "GSW",
    Ind = "IND",
}

export enum City {
    Atlanta = "Atlanta",
    GoldenState = "Golden State",
    Indiana = "Indiana",
}

export enum Conference {
    East = "East",
    West = "West",
}

export enum Division {
    Central = "Central",
    Pacific = "Pacific",
    Southeast = "Southeast",
}

export enum FullName {
    AtlantaHawks = "Atlanta Hawks",
    GoldenStateWarriors = "Golden State Warriors",
    IndianaPacers = "Indiana Pacers",
}

export enum Name {
    Hawks = "Hawks",
    Pacers = "Pacers",
    Warriors = "Warriors",
}

export interface Meta {
    current_page: number;
    next_page:    number;
    per_page:     number;
}
