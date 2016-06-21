<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_8bb0f20a35a29c4f55066a3c092492cb57a845ec8695f9b394434be15d96bfdc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6252d0cd8522ba918b0208edfa2330aa818911f9cbc8036d72ad8957140b1bc = $this->env->getExtension("native_profiler");
        $__internal_e6252d0cd8522ba918b0208edfa2330aa818911f9cbc8036d72ad8957140b1bc->enter($__internal_e6252d0cd8522ba918b0208edfa2330aa818911f9cbc8036d72ad8957140b1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6252d0cd8522ba918b0208edfa2330aa818911f9cbc8036d72ad8957140b1bc->leave($__internal_e6252d0cd8522ba918b0208edfa2330aa818911f9cbc8036d72ad8957140b1bc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_04a7d3ec3f36265aa628fda7d193084d6bb3fef0e061cbdb0586517d67646f1c = $this->env->getExtension("native_profiler");
        $__internal_04a7d3ec3f36265aa628fda7d193084d6bb3fef0e061cbdb0586517d67646f1c->enter($__internal_04a7d3ec3f36265aa628fda7d193084d6bb3fef0e061cbdb0586517d67646f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_04a7d3ec3f36265aa628fda7d193084d6bb3fef0e061cbdb0586517d67646f1c->leave($__internal_04a7d3ec3f36265aa628fda7d193084d6bb3fef0e061cbdb0586517d67646f1c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
