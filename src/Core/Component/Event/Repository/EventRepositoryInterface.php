<?php

namespace App\Core\Component\Event\Repository;

use App\Core\Component\Event\Entity\Event;

interface EventRepositoryInterface
{
    public function save(Event $event): void;

    public function remove(Event $event): void;

    /**
     * @param string $type
     * @return Event[]
     */
    public function findByType(string $type): array;

    /**
     * @param \DateTimeImmutable $from
     * @param \DateTimeImmutable $to
     * @return Event[]
     */
    public function findByDateRange(\DateTimeImmutable $from, \DateTimeImmutable $to): array;
}
