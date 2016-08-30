<?php
namespace Ttree\Cqrs\Domain;

/*
 * This file is part of the Ttree.Cqrs package.
 *
 * (c) Hand crafted with love in each details by medialib.tv
 */

/**
 * RepositoryInterface
 */
interface RepositoryInterface
{
    /**
     * @param string $identifier
     * @return AggregateRootInterface|null
     */
    public function findByIdentifier($identifier): AggregateRootInterface;

    /**
     * @param AggregateRootInterface $aggregate
     * @return void
     */
    public function save(AggregateRootInterface $aggregate);

    /**
     * @param string $identifier
     * @return boolean
     */
    public function contains($identifier): bool;
}
