<?php
/**
 * @Entity
 * @Table(name="rank")
 */
class Rank
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @OneToOne(targetEntity="RankStyle", mappedBy="rank", cascade={"persist"})
     */
    public $rank_style;
}
