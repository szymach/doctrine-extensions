<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FSi\DoctrineExtensions\Tests\Translatable\Fixture;

use Doctrine\ORM\Mapping as ORM;
use FSi\DoctrineExtensions\Translatable\Mapping\Annotation as Translatable;

/**
 * @ORM\Entity(repositoryClass="FSi\DoctrineExtensions\Translatable\Entity\Repository\TranslatableRepository")
 */
class TranslatableWithoutTranslations
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @Translatable\Translatable(mappedBy="translations")
     * @var string
     */
    private $contents;

    /**
     * @Translatable\Locale
     * @var string
     */
    private $locale;

    /**
     * @return integer
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setContents(?string $contents): void
    {
        $this->contents = $contents;
    }

    public function getContents(): ?string
    {
        return $this->contents;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }
}
