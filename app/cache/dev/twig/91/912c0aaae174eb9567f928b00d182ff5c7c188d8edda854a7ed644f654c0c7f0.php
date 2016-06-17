<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_49c3157e94cc7e11cd7363c6d8b4761aa35c688da0a4340a6bb508d2591d6775 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6092a1be4b2edaaadcf3b0fd17d0fb49706dfd3f7772cc9b52afb713053daf0d = $this->env->getExtension("native_profiler");
        $__internal_6092a1be4b2edaaadcf3b0fd17d0fb49706dfd3f7772cc9b52afb713053daf0d->enter($__internal_6092a1be4b2edaaadcf3b0fd17d0fb49706dfd3f7772cc9b52afb713053daf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6092a1be4b2edaaadcf3b0fd17d0fb49706dfd3f7772cc9b52afb713053daf0d->leave($__internal_6092a1be4b2edaaadcf3b0fd17d0fb49706dfd3f7772cc9b52afb713053daf0d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_25b1585bdb1d33ae177e1a312bb9882ddee7aa603fc39597035cb163aaabbdc7 = $this->env->getExtension("native_profiler");
        $__internal_25b1585bdb1d33ae177e1a312bb9882ddee7aa603fc39597035cb163aaabbdc7->enter($__internal_25b1585bdb1d33ae177e1a312bb9882ddee7aa603fc39597035cb163aaabbdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_25b1585bdb1d33ae177e1a312bb9882ddee7aa603fc39597035cb163aaabbdc7->leave($__internal_25b1585bdb1d33ae177e1a312bb9882ddee7aa603fc39597035cb163aaabbdc7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
