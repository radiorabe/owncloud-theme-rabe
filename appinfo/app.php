<?php
/**
 * @author Lucas Bickel <hairmare@rabe.ch>
 * @copyright Copyright (c) 2020 Radio Bern RaBe
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

$policy = new OCP\AppFramework\Http\EmptyContentSecurityPolicy();
$policy->addAllowedStyleDomain('fonts.googleapis.com');
$policy->addAllowedFontDomain('fonts.gstatic.com');

\OC::$server->getContentSecurityPolicyManager()->addDefaultPolicy($policy);

\OCP\Util::addHeader(
	'link',
	[
		'rel' => 'stylesheet',
		'href' => 'https://fonts.googleapis.com/css?family=Fjalla+One|Roboto&display=swap',
	]
);
