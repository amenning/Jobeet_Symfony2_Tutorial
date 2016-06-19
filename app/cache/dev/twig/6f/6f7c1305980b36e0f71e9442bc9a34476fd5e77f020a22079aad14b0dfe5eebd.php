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
        $__internal_b5431c78a6d6300f56f32342a9fbd4edc91df12ded7b771ae79d592197c634be = $this->env->getExtension("native_profiler");
        $__internal_b5431c78a6d6300f56f32342a9fbd4edc91df12ded7b771ae79d592197c634be->enter($__internal_b5431c78a6d6300f56f32342a9fbd4edc91df12ded7b771ae79d592197c634be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5431c78a6d6300f56f32342a9fbd4edc91df12ded7b771ae79d592197c634be->leave($__internal_b5431c78a6d6300f56f32342a9fbd4edc91df12ded7b771ae79d592197c634be_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_6ec834f45b24c9b6fe3d133dd01b7b6722a974fb680765ae6133da5be8dca168 = $this->env->getExtension("native_profiler");
        $__internal_6ec834f45b24c9b6fe3d133dd01b7b6722a974fb680765ae6133da5be8dca168->enter($__internal_6ec834f45b24c9b6fe3d133dd01b7b6722a974fb680765ae6133da5be8dca168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_6ec834f45b24c9b6fe3d133dd01b7b6722a974fb680765ae6133da5be8dca168->leave($__internal_6ec834f45b24c9b6fe3d133dd01b7b6722a974fb680765ae6133da5be8dca168_prof);

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
