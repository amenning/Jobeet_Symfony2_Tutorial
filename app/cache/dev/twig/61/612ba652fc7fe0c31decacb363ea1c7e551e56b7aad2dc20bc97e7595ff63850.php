<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_d75cc6e62dbff1c2e0702e407bf85cf98af810418d0b46fa7377cc4dd6057f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c983ef1045cd4fe151fdbe496d26fd83c38d17b70ed69a4b652745c250a72e7 = $this->env->getExtension("native_profiler");
        $__internal_1c983ef1045cd4fe151fdbe496d26fd83c38d17b70ed69a4b652745c250a72e7->enter($__internal_1c983ef1045cd4fe151fdbe496d26fd83c38d17b70ed69a4b652745c250a72e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_1c983ef1045cd4fe151fdbe496d26fd83c38d17b70ed69a4b652745c250a72e7->leave($__internal_1c983ef1045cd4fe151fdbe496d26fd83c38d17b70ed69a4b652745c250a72e7_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_591b3520387cf5af614bcafe0f7c58faa43752fa91a6db08dd5b03060791c0f6 = $this->env->getExtension("native_profiler");
        $__internal_591b3520387cf5af614bcafe0f7c58faa43752fa91a6db08dd5b03060791c0f6->enter($__internal_591b3520387cf5af614bcafe0f7c58faa43752fa91a6db08dd5b03060791c0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_591b3520387cf5af614bcafe0f7c58faa43752fa91a6db08dd5b03060791c0f6->leave($__internal_591b3520387cf5af614bcafe0f7c58faa43752fa91a6db08dd5b03060791c0f6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
