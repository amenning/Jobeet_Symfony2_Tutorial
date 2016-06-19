<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_35b4323315e99d889a9530a182668fa9bb352adae98c46ad9ab0fc9967ea2ab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad9619611713e9da1a80600e1dfd25e37d9aae39b3434d370065d00181e36052 = $this->env->getExtension("native_profiler");
        $__internal_ad9619611713e9da1a80600e1dfd25e37d9aae39b3434d370065d00181e36052->enter($__internal_ad9619611713e9da1a80600e1dfd25e37d9aae39b3434d370065d00181e36052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad9619611713e9da1a80600e1dfd25e37d9aae39b3434d370065d00181e36052->leave($__internal_ad9619611713e9da1a80600e1dfd25e37d9aae39b3434d370065d00181e36052_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7e7e1a2438cd4edbd75c11e745d071621efc865041d436b0b355e7d0a4a2dd39 = $this->env->getExtension("native_profiler");
        $__internal_7e7e1a2438cd4edbd75c11e745d071621efc865041d436b0b355e7d0a4a2dd39->enter($__internal_7e7e1a2438cd4edbd75c11e745d071621efc865041d436b0b355e7d0a4a2dd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_7e7e1a2438cd4edbd75c11e745d071621efc865041d436b0b355e7d0a4a2dd39->leave($__internal_7e7e1a2438cd4edbd75c11e745d071621efc865041d436b0b355e7d0a4a2dd39_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
