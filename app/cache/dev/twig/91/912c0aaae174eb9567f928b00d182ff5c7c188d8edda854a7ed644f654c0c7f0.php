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
        $__internal_8207015a77fca5c825129f0ce170f29feffafeaf965a9437faf6502d4a930c59 = $this->env->getExtension("native_profiler");
        $__internal_8207015a77fca5c825129f0ce170f29feffafeaf965a9437faf6502d4a930c59->enter($__internal_8207015a77fca5c825129f0ce170f29feffafeaf965a9437faf6502d4a930c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8207015a77fca5c825129f0ce170f29feffafeaf965a9437faf6502d4a930c59->leave($__internal_8207015a77fca5c825129f0ce170f29feffafeaf965a9437faf6502d4a930c59_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_85321326ac229969b628a59819f5e33aa6ac9be2317dfc5171df22e437b3edf7 = $this->env->getExtension("native_profiler");
        $__internal_85321326ac229969b628a59819f5e33aa6ac9be2317dfc5171df22e437b3edf7->enter($__internal_85321326ac229969b628a59819f5e33aa6ac9be2317dfc5171df22e437b3edf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_85321326ac229969b628a59819f5e33aa6ac9be2317dfc5171df22e437b3edf7->leave($__internal_85321326ac229969b628a59819f5e33aa6ac9be2317dfc5171df22e437b3edf7_prof);

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
