<?php declare(strict_types = 1);

/*
 * This file is part of the Vairogs package.
 *
 * (c) Dāvis Zālītis (k0d3r1s) <davis@vairogs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vairogs\Component\DoctrineTools\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class VersionAddExtensionUnaccent extends AbstractMigration
{
    public function down(
        Schema $schema,
    ): void {
        $this->addSql('DROP EXTENSION IF EXISTS unaccent');
    }

    public function getDescription(): string
    {
        return 'CREATE EXTENSION IF NOT EXISTS unaccent';
    }

    public function up(
        Schema $schema,
    ): void {
        $this->addSql('CREATE EXTENSION IF NOT EXISTS unaccent');
    }
}
