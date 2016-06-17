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
        $__internal_6fd9d700b4b02f9a0d7a922d3cc12fcb264aab137728fbd4cbc2ff19ea5288c1 = $this->env->getExtension("native_profiler");
        $__internal_6fd9d700b4b02f9a0d7a922d3cc12fcb264aab137728fbd4cbc2ff19ea5288c1->enter($__internal_6fd9d700b4b02f9a0d7a922d3cc12fcb264aab137728fbd4cbc2ff19ea5288c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd9d700b4b02f9a0d7a922d3cc12fcb264aab137728fbd4cbc2ff19ea5288c1->leave($__internal_6fd9d700b4b02f9a0d7a922d3cc12fcb264aab137728fbd4cbc2ff19ea5288c1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_84e73a42049bfdda6a6e99d24d63983ec32843efe5d4856610e083c2a10449f8 = $this->env->getExtension("native_profiler");
        $__internal_84e73a42049bfdda6a6e99d24d63983ec32843efe5d4856610e083c2a10449f8->enter($__internal_84e73a42049bfdda6a6e99d24d63983ec32843efe5d4856610e083c2a10449f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_84e73a42049bfdda6a6e99d24d63983ec32843efe5d4856610e083c2a10449f8->leave($__internal_84e73a42049bfdda6a6e99d24d63983ec32843efe5d4856610e083c2a10449f8_prof);

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
