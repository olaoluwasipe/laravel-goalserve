# ⚡⚡⚡ Laravel GoalServe

Simple integration with [GoalServe](https://www.goalserve.com/) API for Laravel.

![Laravel media removable](logo.png)

## Table of contents
- [Table of contents](#table-of-contents)
- [Setup](#setup)
  - [Installation](#installation)
  - [Publish](#publish)
- [Instructions](#instructions)
  - [Soccer Stats](#soccer-stats)
    - [Leagues](#leagues)
    - [Teams](#teams)
    - [Team Updated List](#team-updated-list)
        - [Filters](#filters)
    - [Team](#team)
    - [Players](#players)
    - [Player Updated List](#player-updated-list)
        - [Filters](#filters)
    - [Player](#player)
- [Testing](#testing)
- [License](#license)
## Setup
### Installation

To install this package through composer run the following command in the terminal

```bash
composer require codebuglab/laravel-goalserve
```
### Publish
You have to publish config file with this artisan command:
```bash
php artisan vendor:publish --provider="CodeBugLab\GoalServe\GoalServeServiceProvider"
```
- File `goalserve.php` will be publish in `config` folder after that.
- Then you have to put your goalserve api key in your `env` file like this `GOALSERVE_API_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx`.
- The default language of api response is `en`,If the returned data from the API should be in another language, set the GOALSERVE_API_LANGUAGE key in your `env`, eg. like this: `GOALSERVE_API_LANGUAGE=ar`.

## Instructions
- You can use goalserve api and get information your want, first take a quick look at [official api description page](https://www.goalserve.com/en/sport-data-feeds/soccer-api/description).
- You should contact them to get api documentation or a free trial, [Click Here](https://www.goalserve.com/en/contact-us).
- For all next API requests you have to use GoalServe facade 
```php
use CodeBugLab\GoalServe\Facades\GoalServe;
```

### Soccer Stats

#### Leagues
```php
$goalServe = GoalServe::soccerStats()->leagues()->get(); // return array
```
- example of returned array: 
```php
Array
(
    [?xml] => Array
        (
            [@version] => 1.0
            [@encoding] => utf-8
        )

    [leagues] => Array
        (
            [@lang] => ar
            [league] => Array
                (
                    [0] => Array
                        (
                            [@eng_cat_name] => Eurocups
                            [@eng_league_name] => Euro
                            [@cat_name] => أوروبا
                            [@league_name] => كأس أمم أوروبا
                            [@id] => 1531
                        )
                    ...
                )

        )

)
```

#### Teams
```php
$goalServe = GoalServe::soccerStats()->teams()->get(); // return array
```
- example of returned array: 
```php
Array
(
    [?xml] => Array
        (
            [@version] => 1.0
            [@encoding] => utf-8
        )

    [teams] => Array
        (
            [@sport] => soccer
            [team] => Array
                (
                    [0] => Array
                        (
                            [@eng_name] => Afghanistan
                            [@name] => أفغانستان
                            [@id] => 5675
                        )
                    ...
                )

        )

)
```

#### Team Updated List
```php
$goalServe = GoalServe::soccerStats()->teamUpdatedList()->get(); // return array
```
- example of returned array: 
```php
Array
(
    [teams] => Array
        (
            [team] => Array
                (
                    [0] => Array
                        (
                            [id] => 26225
                            [updated] => 19/09/2023 11:28:42
                        )
                    ...
                )

            [updated] => 19/09/2023 11:28:49
        )

)
```
##### Filters
- **Date filter:** `GoalServe::soccerStats()->teamUpdatedList()->date('15.03.2021')->url()` where date with `dd.mm.yyyy` format.

#### Team
```php
$goalServe = GoalServe::soccerStats()->team(9260)->get(); // return array
```
- example of returned array: 
```php
Array
(
    [?xml] => Array
        (
            [@version] => 1.0
            [@encoding] => utf-8
        )

    [teams] => Array
        (
            [team] => Array
                (
                    [@id] => 9260
                    [@is_national_team] => False
                    [@is_women] => False
                    [name] => Manchester United
                    [fullname] => 
                    [country] => England
                    [founded] => 1878
                    [leagues] => Array
                        (
                            [@league_rank] => 13
                            [league_id] => Array
                                (
                                    [0] => 1204
                                    ...
                                )

                        )

                    [venue_name] => Old Trafford
                    [venue_id] => 87980
                    [venue_surface] => grass
                    [venue_address] => Array
                        (
                            [#cdata-section] => Sir Matt Busby Way
                        )

                    [venue_city] => Array
                        (
                            [#cdata-section] => Manchester
                        )

                    [venue_capacity] => 76212
                    [venue_image] => /9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgo ▶
                    [image] => iVBORw0KGgoAAAANSUhEUgAAAJYAAACWCAYAAAA8AXHiAAAACXBIWXMAAC4jAAAuIwF4pT92AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAIABJREFUeNrsfQV4FFf3/p1NgDql+rWl7kVa ▶
                    [squad] => Array
                        (
                            [player] => Array
                                (
                                    [0] => Array
                                        (
                                            [@id] => 396595
                                            [@name] => A. Bayındır
                                            [@number] => 1
                                            [@age] => 25
                                            [@position] => G
                                            [@injured] => False
                                            [@minutes] => 0
                                            [@appearences] => 0
                                            [@lineups] => 0
                                            [@substitute_in] => 0
                                            [@substitute_out] => 0
                                            [@substitutes_on_bench] => 2
                                            [@goals] => 0
                                            [@assists] => 0
                                            [@yellowcards] => 0
                                            [@yellowred] => 0
                                            [@redcards] => 0
                                            [@isCaptain] => 
                                            [@shotsTotal] => 
                                            [@shotsOn] => 
                                            [@goalsConceded] => 
                                            [@fouldDrawn] => 
                                            [@foulsCommitted] => 
                                            [@tackles] => 
                                            [@blocks] => 
                                            [@crossesTotal] => 
                                            [@crossesAccurate] => 
                                            [@interceptions] => 
                                            [@clearances] => 
                                            [@dispossesed] => 
                                            [@saves] => 
                                            [@insideBoxSaves] => 
                                            [@duelsTotal] => 
                                            [@duelsWon] => 
                                            [@dribbleAttempts] => 
                                            [@dribbleSucc] => 
                                            [@penComm] => 
                                            [@penWon] => 
                                            [@penScored] => 
                                            [@penMissed] => 
                                            [@penSaved] => 
                                            [@passes] => 
                                            [@pAccuracy] => 
                                            [@keyPasses] => 
                                            [@woordworks] => 
                                            [@rating] => 
                                        )
                                    ...
                                )

                        )

                    [coach] => Array
                        (
                            [@name] => E. ten Hag
                            [@id] => 255436
                        )

                    [transfers] => Array
                        (
                            [in] => Array
                                (
                                    [player] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [@id] => 396595
                                                    [@name] => A. Bayındır
                                                    [@date] => 01.09.23
                                                    [@age] => 
                                                    [@position] => 
                                                    [@from] => Fenerbahce
                                                    [@team_id] => 17027
                                                    [@type] => € 5M
                                                )
                                            ...
                                        )

                                )

                            [out] => Array
                                (
                                    [player] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [@id] => 289271
                                                    [@name] => E. Bailly
                                                    [@date] => 04.09.23
                                                    [@age] => 
                                                    [@position] => 
                                                    [@to] => Besiktas
                                                    [@team_id] => 16994
                                                    [@type] => Free
                                                )
                                            ...
                                        )

                                )

                        )

                    [statistics] => Array
                        (
                            [rank] => Array
                                (
                                    [@total] => 13
                                )

                            [win] => Array
                                (
                                    [@total] => 2
                                    [@home] => 2
                                    [@away] => 0
                                )

                            [draw] => Array
                                (
                                    [@total] => 0
                                    [@home] => 0
                                    [@away] => 0
                                )

                            [lost] => Array
                                (
                                    [@total] => 3
                                    [@home] => 1
                                    [@away] => 2
                                )

                            [goals_for] => Array
                                (
                                    [@total] => 6
                                    [@home] => 5
                                    [@away] => 1
                                )

                            [goals_against] => Array
                                (
                                    [@total] => 10
                                    [@home] => 5
                                    [@away] => 5
                                )

                            [clean_sheet] => Array
                                (
                                    [@total] => 1
                                    [@home] => 1
                                    [@away] => 0
                                )

                            [avg_goals_per_game_scored] => Array
                                (
                                    [@total] => 1.2
                                    [@home] => 1.67
                                    [@away] => 0.50
                                )

                            [avg_goals_per_game_conceded] => Array
                                (
                                    [@total] => 2
                                    [@home] => 1.67
                                    [@away] => 2.50
                                )

                            [avg_first_goal_scored] => Array
                                (
                                    [@total] => 48m
                                    [@home] => 55m
                                    [@away] => 27m
                                )

                            [avg_first_goal_conceded] => Array
                                (
                                    [@total] => 24m
                                    [@home] => 11m
                                    [@away] => 38m
                                )

                            [failed_to_score] => Array
                                (
                                    [@total] => 1
                                    [@home] => 0
                                    [@away] => 1
                                )

                            [scoring_minutes] => Array
                                (
                                    [period] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [@min] => "0-15'"
                                                    [@pct] => 0.0%
                                                    [@count] => 0
                                                )
                                            ...
                                        )

                                )

                        )

                    [detailed_stats] => Array
                        (
                            [league] => Array
                                (
                                    [@name] => Premier League
                                    [@season] => 2023/2024
                                    [@id] => 1204
                                    [fulltime] => Array
                                        (
                                            [win] => Array
                                                (
                                                    [@total] => 2
                                                    [@home] => 2
                                                    [@away] => 0
                                                )

                                            [lost] => Array
                                                (
                                                    [@total] => 3
                                                    [@home] => 1
                                                    [@away] => 2
                                                )

                                            [draw] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [goals_for] => Array
                                                (
                                                    [@total] => 6
                                                    [@home] => 5
                                                    [@away] => 1
                                                )

                                            [goals_against] => Array
                                                (
                                                    [@total] => 10
                                                    [@home] => 5
                                                    [@away] => 5
                                                )

                                            [clean_sheet] => Array
                                                (
                                                    [@total] => 1
                                                    [@home] => 1
                                                    [@away] => 0
                                                )

                                            [avg_goals_per_game_scored] => Array
                                                (
                                                    [@total] => 1.2
                                                    [@home] => 1.67
                                                    [@away] => 0.5
                                                )

                                            [avg_goals_per_game_conceded] => Array
                                                (
                                                    [@total] => 2
                                                    [@home] => 1
                                                    [@away] => 1
                                                )

                                            [biggest_victory] => Array
                                                (
                                                    [@total] => 1-0
                                                    [@home] => 1-0
                                                    [@away] => 
                                                )

                                            [biggest_defeat] => Array
                                                (
                                                    [@total] => 1-3
                                                    [@home] => 1-3
                                                    [@away] => 1-3
                                                )

                                            [avg_first_goal_scored] => Array
                                                (
                                                    [@total] => 56
                                                    [@home] => 65
                                                    [@away] => 27
                                                )

                                            [avg_first_goal_conceded] => Array
                                                (
                                                    [@total] => 46
                                                    [@home] => 25
                                                    [@away] => 67
                                                )

                                            [failed_to_score] => Array
                                                (
                                                    [@total] => 1
                                                    [@home] => 0
                                                    [@away] => 1
                                                )

                                            [shotsTotal] => Array
                                                (
                                                    [@total] => 79
                                                    [@home] => 47
                                                    [@away] => 32
                                                )

                                            [shotsOnGoal] => Array
                                                (
                                                    [@total] => 11
                                                    [@home] => 7
                                                    [@away] => 4
                                                )

                                            [corners] => Array
                                                (
                                                    [@total] => 36
                                                    [@home] => 27
                                                    [@away] => 9
                                                )

                                            [avg_corners] => Array
                                                (
                                                    [@total] => 7.20
                                                    [@home] => 5.40
                                                    [@away] => 1.80
                                                )

                                            [offsides] => Array
                                                (
                                                    [@total] => 13
                                                    [@home] => 8
                                                    [@away] => 5
                                                )

                                            [possession] => Array
                                                (
                                                    [@total] => 50
                                                    [@home] => 53
                                                    [@away] => 44
                                                )

                                            [fouls] => Array
                                                (
                                                    [@total] => 51
                                                    [@home] => 36
                                                    [@away] => 15
                                                )

                                            [yellowcards] => Array
                                                (
                                                    [@total] => 14
                                                    [@home] => 8
                                                    [@away] => 6
                                                )

                                            [redcards] => Array
                                                (
                                                    [@total] => 1
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [avg_yellowcards] => Array
                                                (
                                                    [@total] => 2.80
                                                    [@home] => 1.60
                                                    [@away] => 1.20
                                                )

                                            [avg_redcards] => Array
                                                (
                                                    [@total] => 0.20
                                                    [@home] => 0.00
                                                    [@away] => 0.00
                                                )

                                        )

                                    [firsthalf] => Array
                                        (
                                            [win] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [lost] => Array
                                                (
                                                    [@total] => 2
                                                    [@home] => 2
                                                    [@away] => 0
                                                )

                                            [draw] => Array
                                                (
                                                    [@total] => 3
                                                    [@home] => 1
                                                    [@away] => 2
                                                )

                                            [win_halftime] => Array
                                                (
                                                    [@ft_win] => 0
                                                    [@ft_draw] => 0
                                                    [@ft_lost] => 0
                                                )

                                            [draw_halftime] => Array
                                                (
                                                    [@ft_win] => 1
                                                    [@ft_draw] => 0
                                                    [@ft_lost] => 2
                                                )

                                            [lost_halftime] => Array
                                                (
                                                    [@ft_win] => 1
                                                    [@ft_draw] => 0
                                                    [@ft_lost] => 1
                                                )

                                            [goals_for] => Array
                                                (
                                                    [@total] => 2
                                                    [@home] => 1
                                                    [@away] => 1
                                                )

                                            [goals_against] => Array
                                                (
                                                    [@total] => 4
                                                    [@home] => 3
                                                    [@away] => 1
                                                )

                                            [goals_for_additiional_time] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [goals_against_additiional_time] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [clean_sheet] => Array
                                                (
                                                    [@total] => 7
                                                    [@home] => 3
                                                    [@away] => 4
                                                )

                                            [avg_goals_per_game_scored] => Array
                                                (
                                                    [@total] => 22
                                                    [@home] => 17
                                                    [@away] => 27
                                                )

                                            [avg_goals_per_game_conceded] => Array
                                                (
                                                    [@total] => 17
                                                    [@home] => 11
                                                    [@away] => 28
                                                )

                                            [failed_to_score] => Array
                                                (
                                                    [@total] => 3
                                                    [@home] => 2
                                                    [@away] => 1
                                                )

                                            [shotsTotal] => Array
                                                (
                                                    [@total] => 42
                                                    [@home] => 25
                                                    [@away] => 17
                                                )

                                            [shotsOnGoal] => Array
                                                (
                                                    [@total] => 11
                                                    [@home] => 7
                                                    [@away] => 4
                                                )

                                            [corners] => Array
                                                (
                                                    [@total] => 16
                                                    [@home] => 11
                                                    [@away] => 5
                                                )

                                            [avg_corners] => Array
                                                (
                                                    [@total] => 3.20
                                                    [@home] => 2.20
                                                    [@away] => 1.00
                                                )

                                            [offsides] => Array
                                                (
                                                    [@total] => 4
                                                    [@home] => 3
                                                    [@away] => 1
                                                )

                                            [possession] => Array
                                                (
                                                    [@total] => 53
                                                    [@home] => 57
                                                    [@away] => 49
                                                )

                                            [fouls] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [yellowcards] => Array
                                                (
                                                    [@total] => 6
                                                    [@home] => 2
                                                    [@away] => 4
                                                )

                                            [redcards] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [avg_yellowcards] => Array
                                                (
                                                    [@total] => 1.20
                                                    [@home] => 0.40
                                                    [@away] => 0.80
                                                )

                                            [avg_redcards] => Array
                                                (
                                                    [@total] => 0.00
                                                    [@home] => 0.00
                                                    [@away] => 0.00
                                                )

                                        )

                                    [secondhalf] => Array
                                        (
                                            [win] => Array
                                                (
                                                    [@total] => 2
                                                    [@home] => 2
                                                    [@away] => 0
                                                )

                                            [lost] => Array
                                                (
                                                    [@total] => 3
                                                    [@home] => 1
                                                    [@away] => 0
                                                )

                                            [draw] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [goals_for] => Array
                                                (
                                                    [@total] => 4
                                                    [@home] => 4
                                                    [@away] => 0
                                                )

                                            [goals_against] => Array
                                                (
                                                    [@total] => 4
                                                    [@home] => 2
                                                    [@away] => 2
                                                )

                                            [goals_for_additiional_time] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [goals_against_additiional_time] => Array
                                                (
                                                    [@total] => 2
                                                    [@home] => 0
                                                    [@away] => 2
                                                )

                                            [clean_sheet] => Array
                                                (
                                                    [@total] => 8
                                                    [@home] => 4
                                                    [@away] => 4
                                                )

                                            [avg_goals_per_game_scored] => Array
                                                (
                                                    [@total] => 71
                                                    [@home] => 71
                                                    [@away] => 
                                                )

                                            [avg_goals_per_game_conceded] => Array
                                                (
                                                    [@total] => 64
                                                    [@home] => 62
                                                    [@away] => 66
                                                )

                                            [failed_to_score] => Array
                                                (
                                                    [@total] => 2
                                                    [@home] => 0
                                                    [@away] => 2
                                                )

                                            [shotsTotal] => Array
                                                (
                                                    [@total] => 37
                                                    [@home] => 22
                                                    [@away] => 15
                                                )

                                            [shotsOnGoal] => Array
                                                (
                                                    [@total] => 13
                                                    [@home] => 9
                                                    [@away] => 4
                                                )

                                            [corners] => Array
                                                (
                                                    [@total] => 20
                                                    [@home] => 16
                                                    [@away] => 4
                                                )

                                            [avg_corners] => Array
                                                (
                                                    [@total] => 4.00
                                                    [@home] => 3.20
                                                    [@away] => 0.80
                                                )

                                            [offsides] => Array
                                                (
                                                    [@total] => 9
                                                    [@home] => 5
                                                    [@away] => 4
                                                )

                                            [possession] => Array
                                                (
                                                    [@total] => 44
                                                    [@home] => 49
                                                    [@away] => 40
                                                )

                                            [fouls] => Array
                                                (
                                                    [@total] => 0
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [yellowcards] => Array
                                                (
                                                    [@total] => 5
                                                    [@home] => 3
                                                    [@away] => 2
                                                )

                                            [redcards] => Array
                                                (
                                                    [@total] => 1
                                                    [@home] => 0
                                                    [@away] => 0
                                                )

                                            [avg_yellowcards] => Array
                                                (
                                                    [@total] => 1.00
                                                    [@home] => 0.60
                                                    [@away] => 0.40
                                                )

                                            [avg_redcards] => Array
                                                (
                                                    [@total] => 0.20
                                                    [@home] => 0.00
                                                    [@away] => 0.00
                                                )

                                        )

                                    [scoring_minutes] => Array
                                        (
                                            [period] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [@min] => 0-15
                                                            [@pct] => 0%
                                                            [@count] => 0
                                                        )
                                                    ...
                                                )

                                        )

                                    [goals_conceded_minutes] => Array
                                        (
                                            [period] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [@min] => 0-15
                                                            [@pct] => 20%
                                                            [@count] => 2
                                                        )
                                                    ...
                                                )

                                        )

                                    [yellowcard_minutes] => Array
                                        (
                                            [period] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [@min] => 0-15
                                                            [@pct] => 0%
                                                            [@count] => 0
                                                        )
                                                    ...
                                                )

                                        )

                                    [redcard_minutes] => Array
                                        (
                                            [period] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [@min] => 0-15
                                                            [@pct] => 0%
                                                            [@count] => 0
                                                        )
                                                    ...
                                                )

                                        )

                                )

                        )

                    [sidelined] => Array
                        (
                            [player] => Array
                                (
                                    [0] => Array
                                        (
                                            [@name] => J. Sancho
                                            [@description] => Suspended
                                            [@startdate] => 14.09.23
                                            [@enddate] => 
                                            [@id] => 453120
                                        )
                                    ...
                                )

                        )

                    [trophies] => Array
                        (
                            [trophy] => Array
                                (
                                    [0] => Array
                                        (
                                            [@country] => England
                                            [@league] => Premier League
                                            [@status] => Winner
                                            [@count] => 20
                                            [@seasons] => 2012/2013, 2010/2011, 2008/2009, 2007/2008, 2006/2007, 2002/2003, 2000/2001, 1999/2000, 1998/1999, 1996/1997, 1995/1996, 1993/1994, 1992/1993, 1966/1967, 1964/1965, 1956/1957, 1955/1956, 1951/1952, 1910/1911, 1907/1908
                                        )
                                    ...
                                )

                        )

                )

        )

)
```

#### Players
```php
$goalServe = GoalServe::soccerStats()->players()->get(); // return array
```
- example of returned array: 
```php
Array
(
    [?xml] => Array
        (
            [@version] => 1.0
            [@encoding] => utf-8
        )

    [teams] => Array
        (
            [@sport] => soccer
            [team] => Array
                (
                    [0] => Array
                        (
                            [@eng_name] => Abassin Alikhil
                            [@name] => أباسين أليخيل
                            [@id] => 185369
                        )
                    ...
                )

        )

)
```

#### Player Updated List
```php
$goalServe = GoalServe::soccerStats()->playerUpdatedList()->get(); // return array
```
- example of returned array: 
```php
Array
(
    [players] => Array
        (
            [player] => Array
                (
                    [0] => Array
                        (
                            [id] => 816945
                            [updated] => 19/09/2023 11:28:06
                        )
                    ...
                )

            [updated] => 19/09/2023 11:27:50
        )

)
```
##### Filters
- **Date filter:** `GoalServe::soccerStats()->playerUpdatedList()->date('15.03.2021')->url()` where date with `dd.mm.yyyy` format.

#### Player
```php
$goalServe = GoalServe::soccerStats()->player(138653)->get(); // return array
```
- example of returned array: 
```php
Array
(
    [?xml] => Array
        (
            [@version] => 1.0
            [@encoding] => utf-8
        )

    [players] => Array
        (
            [@category] => Attacker
            [player] => Array
                (
                    [@common_name] => Mohamed Salah
                    [@id] => 138653
                    [name] => Mohamed Salah
                    [firstname] => Mohamed
                    [lastname] => Salah Hamed Mahrous Ghaly
                    [team] => Liverpool
                    [teamid] => 9249
                    [nationality] => Egypt
                    [birthdate] => 15/06/1992
                    [age] => 31
                    [birthcountry] => Egypt
                    [birthplace] => Muḥāfaẓat al Gharbiyya
                    [position] => Attacker
                    [height] => 175 cm
                    [weight] => 71 kg
                    [preferredFoot] => Left
                    [marketValueEUR] => 63000000
                    [image] => iVBORw0KGgoAAAANSUhEUgAAAJYAAACWCAYAAAA8AXHiAAAACXBIWXMAAC4jAAAuIwF4pT92AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAIABJREFUeNrsfQV4FFf3/p1NgDql+rWl7kVa ▶
                    [statistic] => Array
                        (
                            [club] => Array
                                (
                                    [0] => Array
                                        (
                                            [@name] => Liverpool
                                            [@id] => 9249
                                            [@league] => Premier League
                                            [@league_id] => 1204
                                            [@season] => 2023/2024
                                            [@minutes] => 433
                                            [@appearences] => 5
                                            [@lineups] => 5
                                            [@substitute_in] => 0
                                            [@substitute_out] => 3
                                            [@substitutes_on_bench] => 0
                                            [@goals] => 2
                                            [@yellowcards] => 0
                                            [@yellowred] => 0
                                            [@redcards] => 0
                                            [@isCaptain] => 0
                                            [@shotsTotal] => 13
                                            [@shotsOn] => 8
                                            [@goalsConceded] => 0
                                            [@assists] => 4
                                            [@fouldDrawn] => 4
                                            [@foulsCommitted] => 2
                                            [@tackles] => 6
                                            [@blocks] => 
                                            [@crossesTotal] => 3
                                            [@crossesAccurate] => 2
                                            [@interceptions] => 1
                                            [@clearances] => 
                                            [@dispossesed] => 9
                                            [@saves] => 
                                            [@insideBoxSaves] => 
                                            [@duelsTotal] => 42
                                            [@duelsWon] => 15
                                            [@dribbleAttempts] => 14
                                            [@dribbleSucc] => 3
                                            [@penComm] => 
                                            [@penWon] => 
                                            [@penScored] => 0
                                            [@penMissed] => 1
                                            [@penSaved] => 
                                            [@passes] => 128
                                            [@pAccuracy] => 21
                                            [@keyPasses] => 12
                                            [@woordworks] => 
                                            [@rating] => 7.540000
                                        )
                                    ...
                                )

                        )

                    [statistic_cups] => Array
                        (
                            [club] => Array
                                (
                                    [0] => Array
                                        (
                                            [@name] => Liverpool
                                            [@id] => 9249
                                            [@league] => League Cup
                                            [@league_id] => 1199
                                            [@season] => 2022/2023
                                            [@minutes] => 90
                                            [@appearences] => 1
                                            [@lineups] => 1
                                            [@substitute_in] => 0
                                            [@substitute_out] => 0
                                            [@substitutes_on_bench] => 0
                                            [@goals] => 1
                                            [@yellowcards] => 0
                                            [@yellowred] => 0
                                            [@redcards] => 0
                                            [@isCaptain] => 0
                                            [@shotsTotal] => 1
                                            [@shotsOn] => 1
                                            [@goalsConceded] => 0
                                            [@assists] => 
                                            [@fouldDrawn] => 
                                            [@foulsCommitted] => 1
                                            [@tackles] => 
                                            [@blocks] => 
                                            [@crossesTotal] => 1
                                            [@crossesAccurate] => 1
                                            [@interceptions] => 
                                            [@clearances] => 
                                            [@dispossesed] => 
                                            [@saves] => 
                                            [@insideBoxSaves] => 
                                            [@duelsTotal] => 3
                                            [@duelsWon] => 1
                                            [@dribbleAttempts] => 
                                            [@dribbleSucc] => 
                                            [@penComm] => 
                                            [@penWon] => 
                                            [@penScored] => 0
                                            [@penMissed] => 0
                                            [@penSaved] => 
                                            [@passes] => 15
                                            [@pAccuracy] => 10
                                            [@keyPasses] => 
                                            [@woordworks] => 
                                            [@rating] => 7.200000
                                        )
                                    ...
                                )

                        )

                    [statistic_cups_intl] => Array
                        (
                            [club] => Array
                                (
                                    [0] => Array
                                        (
                                            [@name] => Liverpool
                                            [@id] => 9249
                                            [@league] => Club Friendlies
                                            [@league_id] => 1534
                                            [@season] => 2023
                                            [@minutes] => 272
                                            [@appearences] => 5
                                            [@lineups] => 4
                                            [@substitute_in] => 1
                                            [@substitute_out] => 4
                                            [@substitutes_on_bench] => 1
                                            [@goals] => 2
                                            [@yellowcards] => 0
                                            [@yellowred] => 0
                                            [@redcards] => 0
                                        )
                                    ...
                                )

                        )

                    [statistic_intl] => Array
                        (
                            [club] => Array
                                (
                                    [0] => Array
                                        (
                                            [@name] => Egypt
                                            [@id] => 8878
                                            [@league] => Africa Cup of Nations Qualification
                                            [@league_id] => 18931
                                            [@season] => 2023
                                            [@minutes] => 345
                                            [@appearences] => 4
                                            [@lineups] => 4
                                            [@substitute_in] => 0
                                            [@substitute_out] => 1
                                            [@substitutes_on_bench] => 0
                                            [@goals] => 2
                                            [@yellowcards] => 0
                                            [@yellowred] => 0
                                            [@redcards] => 0
                                            [@isCaptain] => 3
                                            [@shotsTotal] => 7
                                            [@shotsOn] => 3
                                            [@goalsConceded] => 0
                                            [@assists] => 3
                                            [@fouldDrawn] => 4
                                            [@foulsCommitted] => 
                                            [@tackles] => 
                                            [@blocks] => 
                                            [@crossesTotal] => 7
                                            [@crossesAccurate] => 4
                                            [@interceptions] => 1
                                            [@clearances] => 
                                            [@dispossesed] => 5
                                            [@saves] => 
                                            [@insideBoxSaves] => 
                                            [@duelsTotal] => 22
                                            [@duelsWon] => 9
                                            [@dribbleAttempts] => 9
                                            [@dribbleSucc] => 4
                                            [@penComm] => 
                                            [@penWon] => 
                                            [@penScored] => 0
                                            [@penMissed] => 0
                                            [@penSaved] => 
                                            [@passes] => 117
                                            [@pAccuracy] => 29
                                            [@keyPasses] => 7
                                            [@woordworks] => 
                                            [@rating] => 7.766666
                                        )
                                    ...
                                )

                        )

                    [trophies] => Array
                        (
                            [trophy] => Array
                                (
                                    [0] => Array
                                        (
                                            [@country] => England
                                            [@league] => Premier League
                                            [@status] => Winner
                                            [@count] => 1
                                            [@seasons] => 2019/2020
                                        )
                                    ...
                                )

                        )

                    [transfers] => Array
                        (
                            [transfer] => Array
                                (
                                    [0] => Array
                                        (
                                            [@date] => 01.07.17
                                            [@from] => Roma
                                            [@from_id] => 11998
                                            [@to] => Liverpool
                                            [@to_id] => 9249
                                            [@type] => € 42M
                                        )
                                    ...
                                )

                        )

                    [sidelined] => Array
                        (
                            [item] => Array
                                (
                                    [0] => Array
                                        (
                                            [@type] => Groin/Pelvis Injury
                                            [@date_start] => 15.05.22
                                            [@date_end] => 21.05.22
                                        )
                                    ...
                                )

                        )

                    [overall_clubs] => Array
                        (
                            [stats] => Array
                                (
                                    [@appearences] => 401
                                    [@lineups] => 380
                                    [@substitute_in] => 21
                                    [@isCaptain] => 10
                                    [@shotsTotal] => 1178
                                    [@shotsOn] => 574
                                    [@goalsConceded] => 0
                                    [@assists] => 99
                                    [@fouldDrawn] => 333
                                    [@foulsCommitted] => 248
                                    [@tackles] => 168
                                    [@blocks] => 2
                                    [@crossesTotal] => 567
                                    [@crossesAccurate] => 133
                                    [@interceptions] => 86
                                    [@clearances] => 47
                                    [@dispossesed] => 417
                                    [@saves] => 
                                    [@insideBoxSaves] => 
                                    [@duelsTotal] => 3474
                                    [@duelsWon] => 1256
                                    [@dribbleAttempts] => 1226
                                    [@dribbleSucc] => 626
                                    [@penComm] => 
                                    [@penWon] => 12
                                    [@penScored] => 27
                                    [@penMissed] => 6
                                    [@penSaved] => 
                                    [@passes] => 10214
                                    [@pAccuracy] => 52
                                    [@keyPasses] => 707
                                    [@woordworks] => 25
                                    [@minutesPlayed] => 32695
                                    [@rating] => 7.309250
                                )
                        )

                )

        )

)
```




## Testing

To run test use this command `./vendor/bin/pest`

## License

This package is a free software distributed under the terms of the MIT license.
