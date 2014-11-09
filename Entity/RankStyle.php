<?php
/**
 * @Entity
 * @Table(name="rank_style")
 */
class RankStyle
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @OneToOne(targetEntity="Rank", inversedBy="rank_style", cascade={"persist"})
     * @JoinColumn(name="rank_id", referencedColumnName="id")
     */
    public $rank;
}


