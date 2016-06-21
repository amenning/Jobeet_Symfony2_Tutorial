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
        $__internal_ffe4255874019fe4e26a6e2f19997fa243370c57d018eca44f3ea42a4b5d9616 = $this->env->getExtension("native_profiler");
        $__internal_ffe4255874019fe4e26a6e2f19997fa243370c57d018eca44f3ea42a4b5d9616->enter($__internal_ffe4255874019fe4e26a6e2f19997fa243370c57d018eca44f3ea42a4b5d9616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_ffe4255874019fe4e26a6e2f19997fa243370c57d018eca44f3ea42a4b5d9616->leave($__internal_ffe4255874019fe4e26a6e2f19997fa243370c57d018eca44f3ea42a4b5d9616_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_827d61979f6caf94bc93ee1d588ff18c0a247714e6d52f8793c3a60a868397c7 = $this->env->getExtension("native_profiler");
        $__internal_827d61979f6caf94bc93ee1d588ff18c0a247714e6d52f8793c3a60a868397c7->enter($__internal_827d61979f6caf94bc93ee1d588ff18c0a247714e6d52f8793c3a60a868397c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_827d61979f6caf94bc93ee1d588ff18c0a247714e6d52f8793c3a60a868397c7->leave($__internal_827d61979f6caf94bc93ee1d588ff18c0a247714e6d52f8793c3a60a868397c7_prof);

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
