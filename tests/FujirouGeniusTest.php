<?php
declare (strict_types = 1);

require_once 'LyricsTestCase.php';

final class FujirouGeniusTest extends LyricsTestCase
{
    protected $module = 'FujirouGenius';

    public function testSearch()
    {
        $artist = 'taylor swift  ';
        $title = 'style';
        $answer = array(
            'artist' => 'Taylor Swift',
            'title'  => 'Style',
            'id'     => 'https://genius.com/Taylor-swift-style-lyrics'
        );

        $this->search($artist, $title, $answer);
    }

    public function testGet()
    {
        $id = 'https://genius.com/Taylor-swift-style-lyrics';
        $path = 'FujirouGenius.taylor_swift.style.txt';

        $this->get($id, $path);
    }

    public function testSearchJapanese()
    {
        $artist = 'Aimer';
        $title = '夜行列車';
        $answer = array(
            'artist' => 'Aimer',
            'title'  => 'Yakou Ressha (夜行列車) ~nothing to lose~',
            'id'     => 'https://genius.com/Aimer-yakou-ressha-nothing-to-lose-lyrics'
        );

        $this->search($artist, $title, $answer);
    }
}
