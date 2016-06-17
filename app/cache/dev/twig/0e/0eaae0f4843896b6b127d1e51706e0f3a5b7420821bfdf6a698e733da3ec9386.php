<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_ff5a53f79c5b1e19d5bf4f4c29a7bdf5d22ef5e31a3f70a5f5b0abc30e34a39a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a43337845c5410630d971576ae7200d1b97234ff2ffe7726340779d506f9dd39 = $this->env->getExtension("native_profiler");
        $__internal_a43337845c5410630d971576ae7200d1b97234ff2ffe7726340779d506f9dd39->enter($__internal_a43337845c5410630d971576ae7200d1b97234ff2ffe7726340779d506f9dd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43337845c5410630d971576ae7200d1b97234ff2ffe7726340779d506f9dd39->leave($__internal_a43337845c5410630d971576ae7200d1b97234ff2ffe7726340779d506f9dd39_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_67abb89c7f59730c18c3ae6ddc3e98040a554551b059c77e43945a87bf62f547 = $this->env->getExtension("native_profiler");
        $__internal_67abb89c7f59730c18c3ae6ddc3e98040a554551b059c77e43945a87bf62f547->enter($__internal_67abb89c7f59730c18c3ae6ddc3e98040a554551b059c77e43945a87bf62f547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_67abb89c7f59730c18c3ae6ddc3e98040a554551b059c77e43945a87bf62f547->leave($__internal_67abb89c7f59730c18c3ae6ddc3e98040a554551b059c77e43945a87bf62f547_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
