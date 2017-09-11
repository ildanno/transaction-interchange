<?php


namespace Antbank\TransactionInterchange;


interface TransactionInterface
{
    /**
     * A string that identifies in a uniqe way the transaction within the system it comes from.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * A string that describes the transaction
     *
     * @return null|string
     */
    public function getDescription(): ?string;

    /**
     * Transaction date
     *
     * @return \DateTime
     */
    public function getDate(): \DateTime;

    /**
     * Optional register date
     *
     * @return \DateTime|null
     */
    public function getRegisterDate(): ?\DateTime;

    /**
     * Optional currency code
     *
     * @return null|string
     */
    public function getCurrency(): ?string;

    /**
     * Gross amount of transaction.
     * Positive amount is intended as income, negative as outcome.
     *
     * @return float
     */
    public function getAmount(): float;

    /**
     * This array can contains every kind of information (i.e.: partials, net, taxes, original currency).
     *
     * @return array
     */
    public function getExtras(): array;
}
