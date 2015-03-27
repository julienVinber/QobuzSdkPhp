<?php
/**
 * PlayerSettings.php
 * User: julien.vinber
 * Date: 27/03/2015
 * Time: 18:53
 */

namespace JulienVinber\QobuzApiPhp\Entity;


use JulienVinber\QobuzApiPhp\Entity\Base\QobuzEntity;

class PlayerSettings extends QobuzEntity
{
    protected $grid_view_mode;
    protected $lang;
    protected $player_volume;
    protected $player_shuffle;
    protected $player_mute;
    protected $playlists_sort;
    protected $player_crossfade_duration;
    protected $sidebar_width;
    protected $browser;
    protected $last_state;
    protected $html5_audio_forced;
    protected $player_remaining_time;
    protected $player_loop;
    protected $featured_menu;
    protected $now_playing;
    protected $filter_columns_visible;
    protected $grid_sort_column;
    protected $grid_sort_direction;
    protected $grid_columns;
    protected $facebook_publish_listen;
    protected $lastfm_scrobbling;
    protected $player_fullscreen;
    protected $menu_hidden_items;
    protected $player_crossfade;
    protected $sidebar;
    protected $player_gapless;
    protected $sonos_audio_format;
    protected $player_audio_format;
    protected $player_offline_format;
    protected $init_playback_restore;
    protected $offline_library_cache_visible;
    protected $facebook_auto_login;
    protected $excluded_genre_ids;

    protected function initValeur($jsonObject)
    {
        $this->setUneValeurSimple($jsonObject, 'grid_view_mode');
        $this->setUneValeurSimple($jsonObject, 'lang');
        $this->setUneValeurSimple($jsonObject, 'player_volume');
        $this->setUneValeurSimple($jsonObject, 'player_shuffle');
        $this->setUneValeurSimple($jsonObject, 'player_mute');
        $this->setUneValeurSimple($jsonObject, 'playlists_sort');
        $this->setUneValeurSimple($jsonObject, 'player_crossfade_duration');
        $this->setUneValeurSimple($jsonObject, 'sidebar_width');
        $this->setUneValeurObjet($jsonObject, 'browser', 'JulienVinber\QobuzApiPhp\Entity\Browser');
        $this->setUneValeurObjet($jsonObject, 'last_state', 'JulienVinber\QobuzApiPhp\Entity\LastState');
        $this->setUneValeurSimple($jsonObject, 'html5_audio_forced');
        $this->setUneValeurSimple($jsonObject, 'player_remaining_time');
        $this->setUneValeurSimple($jsonObject, 'player_loop');
        $this->setUneValeurSimple($jsonObject, 'featured_menu');
        $this->setUneValeurSimple($jsonObject, 'now_playing');
        $this->setUneValeurSimple($jsonObject, 'filter_columns_visible');
        $this->setUneValeurSimple($jsonObject, 'grid_sort_column');
        $this->setUneValeurSimple($jsonObject, 'grid_sort_direction');
        $this->setUneValeurArray($jsonObject, 'grid_columns');
        $this->setUneValeurSimple($jsonObject, 'facebook_publish_listen');
        $this->setUneValeurSimple($jsonObject, 'lastfm_scrobbling');
        $this->setUneValeurSimple($jsonObject, 'player_fullscreen');
        $this->setUneValeurArray($jsonObject, 'menu_hidden_items');
        $this->setUneValeurSimple($jsonObject, 'player_crossfade');
        $this->setUneValeurSimple($jsonObject, 'sidebar');
        $this->setUneValeurSimple($jsonObject, 'player_gapless');
        $this->setUneValeurSimple($jsonObject, 'sonos_audio_format');
        $this->setUneValeurSimple($jsonObject, 'player_audio_format');
        $this->setUneValeurSimple($jsonObject, 'player_offline_format');
        $this->setUneValeurSimple($jsonObject, 'init_playback_restore');
        $this->setUneValeurSimple($jsonObject, 'offline_library_cache_visible');
        $this->setUneValeurSimple($jsonObject, 'facebook_auto_login');
        $this->setUneValeurArray($jsonObject, 'excluded_genre_ids');
    }
}