export interface Ballin {
    data: Datum[];
    meta: Meta;
}

export interface Datum {
    id:            number;
    first_name:    string;
    height_feet:   number | null;
    height_inches: number | null;
    last_name:     string;
    position:      Position;
    team:          Team;
    weight_pounds: number | null;
}

export enum Position {
    C = "C",
    Empty = "",
    F = "F",
    G = "G",
}

export interface Team {
    id:           number;
    abbreviation: string;
    city:         string;
    conference:   Conference;
    division:     string;
    full_name:    string;
    name:         string;
}

export enum Conference {
    East = "East",
    Empty = "    ",
    West = "West",
}

export interface Meta {
    current_page: number;
    next_page:    number;
    per_page:     number;
}
